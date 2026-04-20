<?php

namespace App\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserService
{
    public function create(array $payload): User
    {
        return DB::transaction(function () use ($payload) {
            $roles = $payload['roles'] ?? [];
            unset($payload['roles']);

            $user = User::create($payload);
            $user->syncRoles($roles);

            return $user->fresh();
        });
    }

    public function update(User $user, array $payload): User
    {
        return DB::transaction(function () use ($user, $payload) {
            $roles = $payload['roles'] ?? null;
            unset($payload['roles']);

            if (empty($payload['password'])) {
                unset($payload['password']);
            }

            $user->update($payload);

            if (is_array($roles)) {
                $user->syncRoles($roles);
            }

            return $user->fresh();
        });
    }
}
