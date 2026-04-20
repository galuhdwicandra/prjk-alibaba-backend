# Dokumentasi Backend (FULL Source)

_Dihasilkan otomatis: 2026-04-20 11:48:24_  
**Root:** `G:\.galuh\latihanlaravel\A-Portfolio-Project\2026\alibaba\backend`

## Daftar Isi
- [Controllers (app/Http/Controllers)](#controllers-app-http-controllers)
  - [app\Http\Controllers\Api\AuthController.php](#file-apphttpcontrollersapiauthcontrollerphp)
  - [app\Http\Controllers\Api\PermissionController.php](#file-apphttpcontrollersapipermissioncontrollerphp)
  - [app\Http\Controllers\Api\RoleController.php](#file-apphttpcontrollersapirolecontrollerphp)
  - [app\Http\Controllers\Api\UserController.php](#file-apphttpcontrollersapiusercontrollerphp)
  - [app\Http\Controllers\Auth\AuthenticatedSessionController.php](#file-apphttpcontrollersauthauthenticatedsessioncontrollerphp)
  - [app\Http\Controllers\Auth\EmailVerificationNotificationController.php](#file-apphttpcontrollersauthemailverificationnotificationcontrollerphp)
  - [app\Http\Controllers\Auth\NewPasswordController.php](#file-apphttpcontrollersauthnewpasswordcontrollerphp)
  - [app\Http\Controllers\Auth\PasswordResetLinkController.php](#file-apphttpcontrollersauthpasswordresetlinkcontrollerphp)
  - [app\Http\Controllers\Auth\RegisteredUserController.php](#file-apphttpcontrollersauthregisteredusercontrollerphp)
  - [app\Http\Controllers\Auth\VerifyEmailController.php](#file-apphttpcontrollersauthverifyemailcontrollerphp)
  - [app\Http\Controllers\Controller.php](#file-apphttpcontrollerscontrollerphp)
- [Form Requests (app/Http/Requests)](#form-requests-app-http-requests)
  - [app\Http\Requests\Api\Auth\ChangePasswordRequest.php](#file-apphttprequestsapiauthchangepasswordrequestphp)
  - [app\Http\Requests\Api\Auth\LoginRequest.php](#file-apphttprequestsapiauthloginrequestphp)
  - [app\Http\Requests\Api\Permission\StorePermissionRequest.php](#file-apphttprequestsapipermissionstorepermissionrequestphp)
  - [app\Http\Requests\Api\Permission\UpdatePermissionRequest.php](#file-apphttprequestsapipermissionupdatepermissionrequestphp)
  - [app\Http\Requests\Api\Role\StoreRoleRequest.php](#file-apphttprequestsapirolestorerolerequestphp)
  - [app\Http\Requests\Api\Role\UpdateRoleRequest.php](#file-apphttprequestsapiroleupdaterolerequestphp)
  - [app\Http\Requests\Api\User\StoreUserRequest.php](#file-apphttprequestsapiuserstoreuserrequestphp)
  - [app\Http\Requests\Api\User\UpdateUserRequest.php](#file-apphttprequestsapiuserupdateuserrequestphp)
- [API Resources (app/Http/Resources)](#api-resources-app-http-resources)
  - [app\Http\Resources\PermissionResource.php](#file-apphttpresourcespermissionresourcephp)
  - [app\Http\Resources\RoleResource.php](#file-apphttpresourcesroleresourcephp)
  - [app\Http\Resources\UserResource.php](#file-apphttpresourcesuserresourcephp)
- [Models (app/Models)](#models-app-models)
  - [app\Models\User.php](#file-appmodelsuserphp)
- [Providers (app/Providers)](#providers-app-providers)
  - [app\Providers\AppServiceProvider.php](#file-appprovidersappserviceproviderphp)
- [Services (app/Services)](#services-app-services)
  - [app\Services\Auth\AuthService.php](#file-appservicesauthauthservicephp)
  - [app\Services\User\UserService.php](#file-appservicesuseruserservicephp)
- [Database Seeders (database/seeders)](#database-seeders-database-seeders)
  - [database\seeders\DatabaseSeeder.php](#file-databaseseedersdatabaseseederphp)
  - [database\seeders\PermissionSeeder.php](#file-databaseseederspermissionseederphp)
  - [database\seeders\RoleSeeder.php](#file-databaseseedersroleseederphp)
  - [database\seeders\SuperAdminSeeder.php](#file-databaseseederssuperadminseederphp)
- [Entry Files](#entry-files)
  - [routes\api.php](#file-routesapiphp)
  - [bootstrap\app.php](#file-bootstrapappphp)
  - [app\Providers\AppServiceProvider.php](#file-appprovidersappserviceproviderphp)

## Controllers (app/Http/Controllers)

<a id="file-apphttpcontrollersapiauthcontrollerphp"></a>
### app\Http\Controllers\Api\AuthController.php
- SHA: `bb4e9511d544`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `AuthController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly AuthService $authService)
- **login**(LoginRequest $request) : *JsonResponse*
- **me**(Request $request) : *JsonResponse*
- **logout**(Request $request) : *JsonResponse*
- **changePassword**(ChangePasswordRequest $request) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\ChangePasswordRequest;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use App\Services\Auth\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(
        private readonly AuthService $authService
    ) {
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $result = $this->authService->login(
            login: $request->string('login')->toString(),
            password: $request->string('password')->toString(),
            deviceName: $request->string('device_name')->toString() ?: 'api-token',
        );

        return response()->json([
            'message' => 'Login berhasil.',
            'token' => $result['token'],
            'data' => new UserResource($result['user']),
        ]);
    }

    public function me(Request $request): JsonResponse
    {
        $user = $request->user()->load('roles', 'permissions');

        return response()->json([
            'message' => 'Profil user berhasil diambil.',
            'data' => new UserResource($user),
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()?->currentAccessToken()?->delete();

        return response()->json([
            'message' => 'Logout berhasil.',
        ]);
    }

    public function changePassword(ChangePasswordRequest $request): JsonResponse
    {
        $request->user()->update([
            'password' => $request->string('password')->toString(),
        ]);

        $request->user()->tokens()->delete();

        $token = $request->user()->createToken('api-token')->plainTextToken;

        return response()->json([
            'message' => 'Password berhasil diubah.',
            'token' => $token,
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapipermissioncontrollerphp"></a>
### app\Http\Controllers\Api\PermissionController.php
- SHA: `ea4fdeebf691`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `PermissionController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **store**(StorePermissionRequest $request) : *JsonResponse*
- **show**(Request $request, Permission $permission) : *JsonResponse*
- **update**(UpdatePermissionRequest $request, Permission $permission) : *JsonResponse*
- **destroy**(Request $request, Permission $permission) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Permission\StorePermissionRequest;
use App\Http\Requests\Api\Permission\UpdatePermissionRequest;
use App\Http\Resources\PermissionResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('permissions.view'), 403);

        $permissions = Permission::query()
            ->latest('id')
            ->paginate((int) $request->get('per_page', 20));

        return response()->json([
            'message' => 'Daftar permission berhasil diambil.',
            'data' => PermissionResource::collection($permissions),
            'meta' => [
                'current_page' => $permissions->currentPage(),
                'last_page' => $permissions->lastPage(),
                'per_page' => $permissions->perPage(),
                'total' => $permissions->total(),
            ],
        ]);
    }

    public function store(StorePermissionRequest $request): JsonResponse
    {
        $permission = Permission::create([
            'name' => $request->string('name')->toString(),
            'guard_name' => 'sanctum',
        ]);

        return response()->json([
            'message' => 'Permission berhasil dibuat.',
            'data' => new PermissionResource($permission),
        ], 201);
    }

    public function show(Request $request, Permission $permission): JsonResponse
    {
        abort_unless($request->user()->can('permissions.view'), 403);

        return response()->json([
            'message' => 'Detail permission berhasil diambil.',
            'data' => new PermissionResource($permission),
        ]);
    }

    public function update(UpdatePermissionRequest $request, Permission $permission): JsonResponse
    {
        $permission->update([
            'name' => $request->string('name')->toString(),
        ]);

        return response()->json([
            'message' => 'Permission berhasil diupdate.',
            'data' => new PermissionResource($permission),
        ]);
    }

    public function destroy(Request $request, Permission $permission): JsonResponse
    {
        abort_unless($request->user()->can('permissions.delete'), 403);

        $permission->delete();

        return response()->json([
            'message' => 'Permission berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapirolecontrollerphp"></a>
### app\Http\Controllers\Api\RoleController.php
- SHA: `a19b9b6e813a`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `RoleController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **store**(StoreRoleRequest $request) : *JsonResponse*
- **show**(Request $request, Role $role) : *JsonResponse*
- **update**(UpdateRoleRequest $request, Role $role) : *JsonResponse*
- **destroy**(Request $request, Role $role) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Role\StoreRoleRequest;
use App\Http\Requests\Api\Role\UpdateRoleRequest;
use App\Http\Resources\RoleResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('roles.view'), 403);

        $roles = Role::query()
            ->with('permissions')
            ->latest('id')
            ->paginate((int) $request->get('per_page', 10));

        return response()->json([
            'message' => 'Daftar role berhasil diambil.',
            'data' => RoleResource::collection($roles),
            'meta' => [
                'current_page' => $roles->currentPage(),
                'last_page' => $roles->lastPage(),
                'per_page' => $roles->perPage(),
                'total' => $roles->total(),
            ],
        ]);
    }

    public function store(StoreRoleRequest $request): JsonResponse
    {
        $role = Role::create([
            'name' => $request->string('name')->toString(),
            'guard_name' => 'sanctum',
        ]);

        $role->syncPermissions($request->input('permissions', []));

        return response()->json([
            'message' => 'Role berhasil dibuat.',
            'data' => new RoleResource($role->load('permissions')),
        ], 201);
    }

    public function show(Request $request, Role $role): JsonResponse
    {
        abort_unless($request->user()->can('roles.view'), 403);

        return response()->json([
            'message' => 'Detail role berhasil diambil.',
            'data' => new RoleResource($role->load('permissions')),
        ]);
    }

    public function update(UpdateRoleRequest $request, Role $role): JsonResponse
    {
        $role->update([
            'name' => $request->string('name')->toString(),
        ]);

        $role->syncPermissions($request->input('permissions', []));

        return response()->json([
            'message' => 'Role berhasil diupdate.',
            'data' => new RoleResource($role->load('permissions')),
        ]);
    }

    public function destroy(Request $request, Role $role): JsonResponse
    {
        abort_unless($request->user()->can('roles.delete'), 403);

        if ($role->name === 'superadmin') {
            return response()->json([
                'message' => 'Role superadmin tidak boleh dihapus.',
            ], 422);
        }

        $role->delete();

        return response()->json([
            'message' => 'Role berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapiusercontrollerphp"></a>
### app\Http\Controllers\Api\UserController.php
- SHA: `ec7bc03b6f0b`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `UserController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly UserService $userService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreUserRequest $request) : *JsonResponse*
- **show**(Request $request, User $user) : *JsonResponse*
- **update**(UpdateUserRequest $request, User $user) : *JsonResponse*
- **destroy**(Request $request, User $user) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\StoreUserRequest;
use App\Http\Requests\Api\User\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\User\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        private readonly UserService $userService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('users.view'), 403);

        $users = User::query()
            ->with('roles', 'permissions')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('username', 'like', "%{$search}%");
                });
            })
            ->latest('id')
            ->paginate((int) $request->get('per_page', 10));

        return response()->json([
            'message' => 'Daftar user berhasil diambil.',
            'data' => UserResource::collection($users),
            'meta' => [
                'current_page' => $users->currentPage(),
                'last_page' => $users->lastPage(),
                'per_page' => $users->perPage(),
                'total' => $users->total(),
            ],
        ]);
    }

    public function store(StoreUserRequest $request): JsonResponse
    {
        $user = $this->userService->create($request->validated());

        return response()->json([
            'message' => 'User berhasil dibuat.',
            'data' => new UserResource($user->load('roles', 'permissions')),
        ], 201);
    }

    public function show(Request $request, User $user): JsonResponse
    {
        abort_unless($request->user()->can('users.view'), 403);

        return response()->json([
            'message' => 'Detail user berhasil diambil.',
            'data' => new UserResource($user->load('roles', 'permissions')),
        ]);
    }

    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        $user = $this->userService->update($user, $request->validated());

        return response()->json([
            'message' => 'User berhasil diupdate.',
            'data' => new UserResource($user->load('roles', 'permissions')),
        ]);
    }

    public function destroy(Request $request, User $user): JsonResponse
    {
        abort_unless($request->user()->can('users.delete'), 403);

        if ($request->user()->id === $user->id) {
            return response()->json([
                'message' => 'User login aktif tidak boleh menonaktifkan dirinya sendiri.',
            ], 422);
        }

        $user->update([
            'is_active' => false,
        ]);

        return response()->json([
            'message' => 'User berhasil dinonaktifkan.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersauthauthenticatedsessioncontrollerphp"></a>
### app\Http\Controllers\Auth\AuthenticatedSessionController.php
- SHA: `d8ce0246f80f`  
- Ukuran: 834 B  
- Namespace: `App\Http\Controllers\Auth`

**Class `AuthenticatedSessionController` extends `Controller`**

Metode Publik:
- **store**(LoginRequest $request) : *Response* — Handle an incoming authentication request.
- **destroy**(Request $request) : *Response* — Handle an incoming authentication request.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): Response
    {
        $request->authenticate();

        $request->session()->regenerate();

        return response()->noContent();
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): Response
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->noContent();
    }
}

```
</details>

<a id="file-apphttpcontrollersauthemailverificationnotificationcontrollerphp"></a>
### app\Http\Controllers\Auth\EmailVerificationNotificationController.php
- SHA: `862143497e81`  
- Ukuran: 662 B  
- Namespace: `App\Http\Controllers\Auth`

**Class `EmailVerificationNotificationController` extends `Controller`**

Metode Publik:
- **store**(Request $request) : *JsonResponse|RedirectResponse* — Send a new email verification notification.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended('/dashboard');
        }

        $request->user()->sendEmailVerificationNotification();

        return response()->json(['status' => 'verification-link-sent']);
    }
}

```
</details>

<a id="file-apphttpcontrollersauthnewpasswordcontrollerphp"></a>
### app\Http\Controllers\Auth\NewPasswordController.php
- SHA: `07cbf8776c39`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Auth`

**Class `NewPasswordController` extends `Controller`**

Metode Publik:
- **store**(Request $request) : *JsonResponse* — Handle an incoming new password request.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class NewPasswordController extends Controller
{
    /**
     * Handle an incoming new password request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->string('password')),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        if ($status != Password::PASSWORD_RESET) {
            throw ValidationException::withMessages([
                'email' => [__($status)],
            ]);
        }

        return response()->json(['status' => __($status)]);
    }
}

```
</details>

<a id="file-apphttpcontrollersauthpasswordresetlinkcontrollerphp"></a>
### app\Http\Controllers\Auth\PasswordResetLinkController.php
- SHA: `49a59b2d9259`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Controllers\Auth`

**Class `PasswordResetLinkController` extends `Controller`**

Metode Publik:
- **store**(Request $request) : *JsonResponse* — Handle an incoming password reset link request.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class PasswordResetLinkController extends Controller
{
    /**
     * Handle an incoming password reset link request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            throw ValidationException::withMessages([
                'email' => [__($status)],
            ]);
        }

        return response()->json(['status' => __($status)]);
    }
}

```
</details>

<a id="file-apphttpcontrollersauthregisteredusercontrollerphp"></a>
### app\Http\Controllers\Auth\RegisteredUserController.php
- SHA: `d22d8409db15`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Controllers\Auth`

**Class `RegisteredUserController` extends `Controller`**

Metode Publik:
- **store**(Request $request) : *Response* — Handle an incoming registration request.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): Response
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->string('password')),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return response()->noContent();
    }
}

```
</details>

<a id="file-apphttpcontrollersauthverifyemailcontrollerphp"></a>
### app\Http\Controllers\Auth\VerifyEmailController.php
- SHA: `f499cd7498ce`  
- Ukuran: 854 B  
- Namespace: `App\Http\Controllers\Auth`

**Class `VerifyEmailController` extends `Controller`**

Metode Publik:
- **__invoke**(EmailVerificationRequest $request) : *RedirectResponse* — Mark the authenticated user's email address as verified.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(
                config('app.frontend_url').'/dashboard?verified=1'
            );
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(
            config('app.frontend_url').'/dashboard?verified=1'
        );
    }
}

```
</details>

<a id="file-apphttpcontrollerscontrollerphp"></a>
### app\Http\Controllers\Controller.php
- SHA: `a33a5105f92c`  
- Ukuran: 77 B  
- Namespace: `App\Http\Controllers`

**Class `Controller`**
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

```
</details>


## Form Requests (app/Http/Requests)

<a id="file-apphttprequestsapiauthchangepasswordrequestphp"></a>
### app\Http\Requests\Api\Auth\ChangePasswordRequest.php
- SHA: `73040a18a2b1`  
- Ukuran: 475 B  
- Namespace: `App\Http\Requests\Api\Auth`

**Class `ChangePasswordRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ChangePasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiauthloginrequestphp"></a>
### app\Http\Requests\Api\Auth\LoginRequest.php
- SHA: `cd770b10c1bc`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Auth`

**Class `LoginRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool* — Determine if the user is authorized to make this request.
- **rules**() : *array* — Determine if the user is authorized to make this request.
- **authenticate**() : *void* — Determine if the user is authorized to make this request.
- **ensureIsNotRateLimited**() : *void* — Determine if the user is authorized to make this request.
- **throttleKey**() : *string* — Determine if the user is authorized to make this request.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'login' => ['required', 'string'],
            'password' => ['required', 'string'],
            'device_name' => ['nullable', 'string', 'max:100'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }
}

```
</details>

<a id="file-apphttprequestsapipermissionstorepermissionrequestphp"></a>
### app\Http\Requests\Api\Permission\StorePermissionRequest.php
- SHA: `4a647a9c8b71`  
- Ukuran: 469 B  
- Namespace: `App\Http\Requests\Api\Permission`

**Class `StorePermissionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('permissions.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:150', Rule::unique('permissions', 'name')],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipermissionupdatepermissionrequestphp"></a>
### app\Http\Requests\Api\Permission\UpdatePermissionRequest.php
- SHA: `98961f4600c1`  
- Ukuran: 550 B  
- Namespace: `App\Http\Requests\Api\Permission`

**Class `UpdatePermissionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('permissions.update') ?? false;
    }

    public function rules(): array
    {
        $permissionId = $this->route('permission')->id;

        return [
            'name' => ['required', 'string', 'max:150', Rule::unique('permissions', 'name')->ignore($permissionId)],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapirolestorerolerequestphp"></a>
### app\Http\Requests\Api\Role\StoreRoleRequest.php
- SHA: `56007c9924c8`  
- Ukuran: 567 B  
- Namespace: `App\Http\Requests\Api\Role`

**Class `StoreRoleRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('roles.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100', Rule::unique('roles', 'name')],
            'permissions' => ['nullable', 'array'],
            'permissions.*' => ['string', 'exists:permissions,name'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiroleupdaterolerequestphp"></a>
### app\Http\Requests\Api\Role\UpdateRoleRequest.php
- SHA: `9ae54339b6fd`  
- Ukuran: 630 B  
- Namespace: `App\Http\Requests\Api\Role`

**Class `UpdateRoleRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('roles.update') ?? false;
    }

    public function rules(): array
    {
        $roleId = $this->route('role')->id;

        return [
            'name' => ['required', 'string', 'max:100', Rule::unique('roles', 'name')->ignore($roleId)],
            'permissions' => ['nullable', 'array'],
            'permissions.*' => ['string', 'exists:permissions,name'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiuserstoreuserrequestphp"></a>
### app\Http\Requests\Api\User\StoreUserRequest.php
- SHA: `3baf01753b8d`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\User`

**Class `StoreUserRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('users.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255', 'required_without_all:phone,username', Rule::unique('users', 'email')],
            'phone' => ['nullable', 'string', 'max:50', 'required_without_all:email,username', Rule::unique('users', 'phone')],
            'username' => ['nullable', 'string', 'max:100', 'required_without_all:email,phone', Rule::unique('users', 'username')],
            'password' => ['required', 'confirmed', Password::defaults()],
            'is_active' => ['sometimes', 'boolean'],
            'user_type' => ['nullable', Rule::in(['superadmin', 'staff', 'owner_viewer'])],
            'roles' => ['required', 'array', 'min:1'],
            'roles.*' => ['string', 'exists:roles,name'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiuserupdateuserrequestphp"></a>
### app\Http\Requests\Api\User\UpdateUserRequest.php
- SHA: `dd6a9a093dcf`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\User`

**Class `UpdateUserRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('users.update') ?? false;
    }

    public function rules(): array
    {
        $userId = $this->route('user')->id;

        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255', 'required_without_all:phone,username', Rule::unique('users', 'email')->ignore($userId)],
            'phone' => ['nullable', 'string', 'max:50', 'required_without_all:email,username', Rule::unique('users', 'phone')->ignore($userId)],
            'username' => ['nullable', 'string', 'max:100', 'required_without_all:email,phone', Rule::unique('users', 'username')->ignore($userId)],
            'password' => ['nullable', 'confirmed', Password::defaults()],
            'is_active' => ['sometimes', 'boolean'],
            'user_type' => ['nullable', Rule::in(['superadmin', 'staff', 'owner_viewer'])],
            'roles' => ['sometimes', 'array', 'min:1'],
            'roles.*' => ['string', 'exists:roles,name'],
        ];
    }
}

```
</details>


## API Resources (app/Http/Resources)

<a id="file-apphttpresourcespermissionresourcephp"></a>
### app\Http\Resources\PermissionResource.php
- SHA: `ddfa379b8897`  
- Ukuran: 467 B  
- Namespace: `App\Http\Resources`

**Class `PermissionResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'guard_name' => $this->guard_name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesroleresourcephp"></a>
### app\Http\Resources\RoleResource.php
- SHA: `e3e1272fe416`  
- Ukuran: 535 B  
- Namespace: `App\Http\Resources`

**Class `RoleResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'guard_name' => $this->guard_name,
            'permissions' => $this->permissions->pluck('name')->values(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesuserresourcephp"></a>
### app\Http\Resources\UserResource.php
- SHA: `f350a641d6f5`  
- Ukuran: 812 B  
- Namespace: `App\Http\Resources`

**Class `UserResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'username' => $this->username,
            'is_active' => $this->is_active,
            'user_type' => $this->user_type,
            'last_login_at' => $this->last_login_at,
            'roles' => $this->getRoleNames()->values(),
            'permissions' => $this->getAllPermissions()->pluck('name')->values(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>


## Models (app/Models)

<a id="file-appmodelsuserphp"></a>
### app\Models\User.php
- SHA: `5e0ba01f2245`  
- Ukuran: 986 B  
- Namespace: `App\Models`

**Class `User` extends `Authenticatable`**
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

// use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $guard_name = 'sanctum';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'username',
        'password',
        'is_active',
        'user_type',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'last_login_at' => 'datetime',
            'is_active' => 'boolean',
            'password' => 'hashed',
        ];
    }
}

```
</details>


## Providers (app/Providers)

<a id="file-appprovidersappserviceproviderphp"></a>
### app\Providers\AppServiceProvider.php
- SHA: `b244d73f7df6`  
- Ukuran: 616 B  
- Namespace: `App\Providers`

**Class `AppServiceProvider` extends `ServiceProvider`**

Metode Publik:
- **register**() : *void* — Register any application services.
- **boot**() : *void* — Register any application services.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });
    }
}

```
</details>


## Services (app/Services)

<a id="file-appservicesauthauthservicephp"></a>
### app\Services\Auth\AuthService.php
- SHA: `380fa0405446`  
- Ukuran: 1 KB  
- Namespace: `App\Services\Auth`

**Class `AuthService`**

Metode Publik:
- **login**(string $login, string $password, ?string $deviceName = null) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthService
{
    public function login(string $login, string $password, ?string $deviceName = null): array
    {
        $user = User::query()
            ->where('email', $login)
            ->orWhere('username', $login)
            ->orWhere('phone', $login)
            ->first();

        if (! $user || ! Hash::check($password, $user->password)) {
            throw ValidationException::withMessages([
                'login' => ['Login atau password salah.'],
            ]);
        }

        if (! $user->is_active) {
            throw ValidationException::withMessages([
                'login' => ['User tidak aktif.'],
            ]);
        }

        $token = $user->createToken($deviceName ?: 'api-token')->plainTextToken;

        $user->forceFill([
            'last_login_at' => now(),
        ])->save();

        return [
            'token' => $token,
            'user' => $user->load('roles', 'permissions'),
        ];
    }
}

```
</details>

<a id="file-appservicesuseruserservicephp"></a>
### app\Services\User\UserService.php
- SHA: `d6a80f5162ad`  
- Ukuran: 965 B  
- Namespace: `App\Services\User`

**Class `UserService`**

Metode Publik:
- **create**(array $payload) : *User*
- **update**(User $user, array $payload) : *User*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
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

```
</details>


## Database Seeders (database/seeders)

<a id="file-databaseseedersdatabaseseederphp"></a>
### database\seeders\DatabaseSeeder.php
- SHA: `8807bdbe704c`  
- Ukuran: 292 B  
- Namespace: `Database\Seeders`

**Class `DatabaseSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            SuperAdminSeeder::class,
        ]);
    }
}

```
</details>

<a id="file-databaseseederspermissionseederphp"></a>
### database\seeders\PermissionSeeder.php
- SHA: `5ef628fc79dd`  
- Ukuran: 707 B  
- Namespace: `Database\Seeders`

**Class `PermissionSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'users.view',
            'users.create',
            'users.update',
            'users.delete',
            'roles.view',
            'roles.create',
            'roles.update',
            'roles.delete',
            'permissions.view',
            'permissions.create',
            'permissions.update',
            'permissions.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }
    }
}

```
</details>

<a id="file-databaseseedersroleseederphp"></a>
### database\seeders\RoleSeeder.php
- SHA: `bfc452a712ad`  
- Ukuran: 864 B  
- Namespace: `Database\Seeders`

**Class `RoleSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $superadmin = Role::findOrCreate('superadmin', 'sanctum');
        $adminPusat = Role::findOrCreate('admin_pusat', 'sanctum');
        $owner = Role::findOrCreate('owner', 'sanctum');

        $allPermissions = Permission::query()->pluck('name')->all();

        $superadmin->syncPermissions($allPermissions);
        $adminPusat->syncPermissions([
            'users.view',
            'users.create',
            'users.update',
            'roles.view',
            'permissions.view',
        ]);
        $owner->syncPermissions([
            'users.view',
            'roles.view',
            'permissions.view',
        ]);
    }
}

```
</details>

<a id="file-databaseseederssuperadminseederphp"></a>
### database\seeders\SuperAdminSeeder.php
- SHA: `89f3447a2d33`  
- Ukuran: 610 B  
- Namespace: `Database\Seeders`

**Class `SuperAdminSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'superadmin@chickenalibaba.test'],
            [
                'name' => 'Super Admin',
                'phone' => '081234567890',
                'username' => 'superadmin',
                'password' => 'password123',
                'is_active' => true,
                'user_type' => 'superadmin',
            ]
        );

        $user->syncRoles(['superadmin']);
    }
}

```
</details>


## Entry Files

<a id="file-routesapiphp"></a>
### routes\api.php
- SHA: `7087a66ee84c`  
- Ukuran: 2 KB  
- Namespace: ``

**Ringkasan Routes (deteksi heuristik):**

| Method | Path | Controller | Action |
|---|---|---|---|
| POST | `/auth/login` | `AuthController` | `login` |
| GET | `/auth/me` | `AuthController` | `me` |
| POST | `/auth/logout` | `AuthController` | `logout` |
| PATCH | `/auth/change-password` | `AuthController` | `changePassword` |
| GET | `/users` | `UserController` | `index` |
| POST | `/users` | `UserController` | `store` |
| GET | `/users/{user}` | `UserController` | `show` |
| PUT | `/users/{user}` | `UserController` | `update` |
| DELETE | `/users/{user}` | `UserController` | `destroy` |
| GET | `/roles` | `RoleController` | `index` |
| POST | `/roles` | `RoleController` | `store` |
| GET | `/roles/{role}` | `RoleController` | `show` |
| PUT | `/roles/{role}` | `RoleController` | `update` |
| DELETE | `/roles/{role}` | `RoleController` | `destroy` |
| GET | `/permissions` | `PermissionController` | `index` |
| POST | `/permissions` | `PermissionController` | `store` |
| GET | `/permissions/{permission}` | `PermissionController` | `show` |
| PUT | `/permissions/{permission}` | `PermissionController` | `update` |
| DELETE | `/permissions/{permission}` | `PermissionController` | `destroy` |
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/auth/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/auth/me', [AuthController::class, 'me']);
        Route::post('/auth/logout', [AuthController::class, 'logout']);
        Route::patch('/auth/change-password', [AuthController::class, 'changePassword']);

        Route::get('/users', [UserController::class, 'index']);
        Route::post('/users', [UserController::class, 'store']);
        Route::get('/users/{user}', [UserController::class, 'show']);
        Route::put('/users/{user}', [UserController::class, 'update']);
        Route::delete('/users/{user}', [UserController::class, 'destroy']);

        Route::get('/roles', [RoleController::class, 'index']);
        Route::post('/roles', [RoleController::class, 'store']);
        Route::get('/roles/{role}', [RoleController::class, 'show']);
        Route::put('/roles/{role}', [RoleController::class, 'update']);
        Route::delete('/roles/{role}', [RoleController::class, 'destroy']);

        Route::get('/permissions', [PermissionController::class, 'index']);
        Route::post('/permissions', [PermissionController::class, 'store']);
        Route::get('/permissions/{permission}', [PermissionController::class, 'show']);
        Route::put('/permissions/{permission}', [PermissionController::class, 'update']);
        Route::delete('/permissions/{permission}', [PermissionController::class, 'destroy']);
    });
});

```
</details>

<a id="file-bootstrapappphp"></a>
### bootstrap\app.php
- SHA: `2df0e8614957`  
- Ukuran: 1 KB  
- Namespace: ``
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->api(prepend: [
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
        ]);

        $middleware->alias([
            'verified' => \App\Http\Middleware\EnsureEmailIsVerified::class,
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

```
</details>

<a id="file-appprovidersappserviceproviderphp"></a>
### app\Providers\AppServiceProvider.php
- SHA: `b244d73f7df6`  
- Ukuran: 616 B  
- Namespace: `App\Providers`

**Class `AppServiceProvider` extends `ServiceProvider`**
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });
    }
}

```
</details>
