<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\ChangePasswordRequest;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use App\Services\Audit\ActivityLogService;
use App\Services\Auth\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(
        private readonly AuthService $authService,
        private readonly ActivityLogService $activityLogService
    ) {
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $result = $this->authService->login(
            login: $request->string('login')->toString(),
            password: $request->string('password')->toString(),
            deviceName: $request->string('device_name')->toString() ?: 'api-token',
        );

        $user = $result['user']->load('roles', 'permissions', 'outletAccesses.outlet');

        $this->activityLogService->record([
            'user_id' => $user->id,
            'outlet_id' => $user->outletAccesses->firstWhere('is_default', true)?->outlet_id,
            'action' => 'login',
            'module' => 'auth',
            'reference_type' => $user::class,
            'reference_id' => $user->id,
            'description' => 'User berhasil login.',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'metadata' => [
                'login' => $request->string('login')->toString(),
                'device_name' => $request->string('device_name')->toString() ?: 'api-token',
            ],
        ]);

        return response()->json([
            'message' => 'Login berhasil.',
            'token' => $result['token'],
            'data' => new UserResource($user),
        ]);
    }

    public function me(Request $request): JsonResponse
    {
        $user = $request->user()->load('roles', 'permissions', 'outletAccesses.outlet');

        return response()->json([
            'message' => 'Profil user berhasil diambil.',
            'data' => new UserResource($user),
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $user = $request->user();

        $this->activityLogService->record([
            'user_id' => $user?->id,
            'outlet_id' => $user?->outletAccesses()->where('is_default', true)->value('outlet_id'),
            'action' => 'logout',
            'module' => 'auth',
            'reference_type' => $user ? $user::class : null,
            'reference_id' => $user?->id,
            'description' => 'User berhasil logout.',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'metadata' => [
                'token_id' => $user?->currentAccessToken()?->id,
            ],
        ]);

        $user?->currentAccessToken()?->delete();

        return response()->json([
            'message' => 'Logout berhasil.',
        ]);
    }

    public function changePassword(ChangePasswordRequest $request): JsonResponse
    {
        $request->user()->update([
            'password' => $request->string('password')->toString(),
        ]);

        $this->activityLogService->record([
            'user_id' => $request->user()->id,
            'outlet_id' => $request->user()->outletAccesses()->where('is_default', true)->value('outlet_id'),
            'action' => 'change_password',
            'module' => 'auth',
            'reference_type' => $request->user()::class,
            'reference_id' => $request->user()->id,
            'description' => 'User mengganti password.',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'metadata' => null,
        ]);

        $request->user()->tokens()->delete();

        $token = $request->user()->createToken('api-token')->plainTextToken;

        return response()->json([
            'message' => 'Password berhasil diubah.',
            'token' => $token,
        ]);
    }
}
