<?php

namespace App\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class UserService
{
    public function create(array $payload): User
    {
        return DB::transaction(function () use ($payload) {
            $roles = $payload['roles'] ?? [];
            $outletIds = $payload['outlet_ids'] ?? [];
            $defaultOutletId = $payload['default_outlet_id'] ?? null;

            unset($payload['roles'], $payload['outlet_ids'], $payload['default_outlet_id']);

            $user = User::create($payload);
            $user->syncRoles($roles);

            $this->syncOutletAccesses(
                user: $user,
                roles: $roles,
                outletIds: $outletIds,
                defaultOutletId: $defaultOutletId,
            );

            return $user->fresh()->load('roles', 'permissions', 'outletAccesses.outlet');
        });
    }

    public function update(User $user, array $payload): User
    {
        return DB::transaction(function () use ($user, $payload) {
            $roles = $payload['roles'] ?? null;
            $outletIds = $payload['outlet_ids'] ?? null;
            $defaultOutletId = $payload['default_outlet_id'] ?? null;

            unset($payload['roles'], $payload['outlet_ids'], $payload['default_outlet_id']);

            if (empty($payload['password'])) {
                unset($payload['password']);
            }

            $user->update($payload);

            if (is_array($roles)) {
                $user->syncRoles($roles);
            }

            if (is_array($outletIds)) {
                $this->syncOutletAccesses(
                    user: $user,
                    roles: is_array($roles) ? $roles : $user->getRoleNames()->all(),
                    outletIds: $outletIds,
                    defaultOutletId: $defaultOutletId,
                );
            }

            return $user->fresh()->load('roles', 'permissions', 'outletAccesses.outlet');
        });
    }

    private function syncOutletAccesses(User $user, array $roles, array $outletIds, ?int $defaultOutletId): void
    {
        $hasCentralAccess = collect($roles)->intersect(['superadmin', 'admin_pusat'])->isNotEmpty();

        if (! $hasCentralAccess && empty($outletIds)) {
            throw ValidationException::withMessages([
                'outlet_ids' => ['User non-pusat wajib memiliki minimal satu akses outlet.'],
            ]);
        }

        if (empty($outletIds)) {
            $user->outletAccesses()->delete();
            return;
        }

        if ($defaultOutletId && ! in_array($defaultOutletId, $outletIds, true)) {
            throw ValidationException::withMessages([
                'default_outlet_id' => ['Default outlet harus termasuk dalam daftar outlet_ids.'],
            ]);
        }

        $defaultOutletId ??= $outletIds[0];

        $syncPayload = [];
        foreach ($outletIds as $outletId) {
            $syncPayload[$outletId] = [
                'is_default' => (int) $outletId === (int) $defaultOutletId,
            ];
        }

        $user->outlets()->sync($syncPayload);
    }
}
