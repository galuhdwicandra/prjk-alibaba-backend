# Dokumentasi Backend (FULL Source)

_Dihasilkan otomatis: 2026-04-20 16:56:19_  
**Root:** `G:\.galuh\latihanlaravel\A-Portfolio-Project\2026\alibaba\backend`

## Daftar Isi
- [Controllers (app/Http/Controllers)](#controllers-app-http-controllers)
  - [app\Http\Controllers\Api\AuthController.php](#file-apphttpcontrollersapiauthcontrollerphp)
  - [app\Http\Controllers\Api\OutletController.php](#file-apphttpcontrollersapioutletcontrollerphp)
  - [app\Http\Controllers\Api\OutletSettingController.php](#file-apphttpcontrollersapioutletsettingcontrollerphp)
  - [app\Http\Controllers\Api\PermissionController.php](#file-apphttpcontrollersapipermissioncontrollerphp)
  - [app\Http\Controllers\Api\ProductCategoryController.php](#file-apphttpcontrollersapiproductcategorycontrollerphp)
  - [app\Http\Controllers\Api\ProductController.php](#file-apphttpcontrollersapiproductcontrollerphp)
  - [app\Http\Controllers\Api\RoleController.php](#file-apphttpcontrollersapirolecontrollerphp)
  - [app\Http\Controllers\Api\SystemSettingController.php](#file-apphttpcontrollersapisystemsettingcontrollerphp)
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
  - [app\Http\Requests\Api\Outlet\StoreOutletRequest.php](#file-apphttprequestsapioutletstoreoutletrequestphp)
  - [app\Http\Requests\Api\Outlet\UpdateOutletRequest.php](#file-apphttprequestsapioutletupdateoutletrequestphp)
  - [app\Http\Requests\Api\Outlet\UpdateOutletSettingRequest.php](#file-apphttprequestsapioutletupdateoutletsettingrequestphp)
  - [app\Http\Requests\Api\Permission\StorePermissionRequest.php](#file-apphttprequestsapipermissionstorepermissionrequestphp)
  - [app\Http\Requests\Api\Permission\UpdatePermissionRequest.php](#file-apphttprequestsapipermissionupdatepermissionrequestphp)
  - [app\Http\Requests\Api\Product\StoreProductRequest.php](#file-apphttprequestsapiproductstoreproductrequestphp)
  - [app\Http\Requests\Api\Product\UpdateProductRequest.php](#file-apphttprequestsapiproductupdateproductrequestphp)
  - [app\Http\Requests\Api\ProductCategory\StoreProductCategoryRequest.php](#file-apphttprequestsapiproductcategorystoreproductcategoryrequestphp)
  - [app\Http\Requests\Api\ProductCategory\UpdateProductCategoryRequest.php](#file-apphttprequestsapiproductcategoryupdateproductcategoryrequestphp)
  - [app\Http\Requests\Api\Role\StoreRoleRequest.php](#file-apphttprequestsapirolestorerolerequestphp)
  - [app\Http\Requests\Api\Role\UpdateRoleRequest.php](#file-apphttprequestsapiroleupdaterolerequestphp)
  - [app\Http\Requests\Api\SystemSetting\UpsertSystemSettingRequest.php](#file-apphttprequestsapisystemsettingupsertsystemsettingrequestphp)
  - [app\Http\Requests\Api\User\StoreUserRequest.php](#file-apphttprequestsapiuserstoreuserrequestphp)
  - [app\Http\Requests\Api\User\UpdateUserRequest.php](#file-apphttprequestsapiuserupdateuserrequestphp)
- [API Resources (app/Http/Resources)](#api-resources-app-http-resources)
  - [app\Http\Resources\OutletResource.php](#file-apphttpresourcesoutletresourcephp)
  - [app\Http\Resources\OutletSettingResource.php](#file-apphttpresourcesoutletsettingresourcephp)
  - [app\Http\Resources\PermissionResource.php](#file-apphttpresourcespermissionresourcephp)
  - [app\Http\Resources\ProductBundleItemResource.php](#file-apphttpresourcesproductbundleitemresourcephp)
  - [app\Http\Resources\ProductCategoryResource.php](#file-apphttpresourcesproductcategoryresourcephp)
  - [app\Http\Resources\ProductModifierGroupResource.php](#file-apphttpresourcesproductmodifiergroupresourcephp)
  - [app\Http\Resources\ProductModifierOptionResource.php](#file-apphttpresourcesproductmodifieroptionresourcephp)
  - [app\Http\Resources\ProductOutletStatusResource.php](#file-apphttpresourcesproductoutletstatusresourcephp)
  - [app\Http\Resources\ProductPriceResource.php](#file-apphttpresourcesproductpriceresourcephp)
  - [app\Http\Resources\ProductResource.php](#file-apphttpresourcesproductresourcephp)
  - [app\Http\Resources\ProductVariantGroupResource.php](#file-apphttpresourcesproductvariantgroupresourcephp)
  - [app\Http\Resources\ProductVariantOptionResource.php](#file-apphttpresourcesproductvariantoptionresourcephp)
  - [app\Http\Resources\RoleResource.php](#file-apphttpresourcesroleresourcephp)
  - [app\Http\Resources\SystemSettingResource.php](#file-apphttpresourcessystemsettingresourcephp)
  - [app\Http\Resources\UserResource.php](#file-apphttpresourcesuserresourcephp)
- [Models (app/Models)](#models-app-models)
  - [app\Models\Outlet.php](#file-appmodelsoutletphp)
  - [app\Models\OutletSetting.php](#file-appmodelsoutletsettingphp)
  - [app\Models\Product.php](#file-appmodelsproductphp)
  - [app\Models\ProductBundleItem.php](#file-appmodelsproductbundleitemphp)
  - [app\Models\ProductCategory.php](#file-appmodelsproductcategoryphp)
  - [app\Models\ProductModifierGroup.php](#file-appmodelsproductmodifiergroupphp)
  - [app\Models\ProductModifierOption.php](#file-appmodelsproductmodifieroptionphp)
  - [app\Models\ProductOutletStatus.php](#file-appmodelsproductoutletstatusphp)
  - [app\Models\ProductPrice.php](#file-appmodelsproductpricephp)
  - [app\Models\ProductVariantGroup.php](#file-appmodelsproductvariantgroupphp)
  - [app\Models\ProductVariantOption.php](#file-appmodelsproductvariantoptionphp)
  - [app\Models\SystemSetting.php](#file-appmodelssystemsettingphp)
  - [app\Models\User.php](#file-appmodelsuserphp)
  - [app\Models\UserOutletAccess.php](#file-appmodelsuseroutletaccessphp)
- [Providers (app/Providers)](#providers-app-providers)
  - [app\Providers\AppServiceProvider.php](#file-appprovidersappserviceproviderphp)
- [Services (app/Services)](#services-app-services)
  - [app\Services\Auth\AuthService.php](#file-appservicesauthauthservicephp)
  - [app\Services\Catalog\ProductService.php](#file-appservicescatalogproductservicephp)
  - [app\Services\Outlet\OutletService.php](#file-appservicesoutletoutletservicephp)
  - [app\Services\SystemSetting\SystemSettingService.php](#file-appservicessystemsettingsystemsettingservicephp)
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

<a id="file-apphttpcontrollersapioutletcontrollerphp"></a>
### app\Http\Controllers\Api\OutletController.php
- SHA: `1d3439cbf2ee`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `OutletController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly OutletService $outletService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreOutletRequest $request) : *JsonResponse*
- **show**(Request $request, Outlet $outlet) : *JsonResponse*
- **update**(UpdateOutletRequest $request, Outlet $outlet) : *JsonResponse*
- **destroy**(Request $request, Outlet $outlet) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Outlet\StoreOutletRequest;
use App\Http\Requests\Api\Outlet\UpdateOutletRequest;
use App\Http\Resources\OutletResource;
use App\Models\Outlet;
use App\Services\Outlet\OutletService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function __construct(
        private readonly OutletService $outletService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('outlets.view'), 403);

        $outlets = Outlet::query()
            ->with('setting')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%")
                        ->orWhere('province', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar outlet berhasil diambil.',
            'data' => OutletResource::collection($outlets),
            'meta' => [
                'current_page' => $outlets->currentPage(),
                'last_page' => $outlets->lastPage(),
                'per_page' => $outlets->perPage(),
                'total' => $outlets->total(),
            ],
        ]);
    }

    public function store(StoreOutletRequest $request): JsonResponse
    {
        $outlet = $this->outletService->create($request->validated());

        return response()->json([
            'message' => 'Outlet berhasil dibuat.',
            'data' => new OutletResource($outlet),
        ], 201);
    }

    public function show(Request $request, Outlet $outlet): JsonResponse
    {
        abort_unless($request->user()->can('outlets.view'), 403);

        return response()->json([
            'message' => 'Detail outlet berhasil diambil.',
            'data' => new OutletResource($outlet->load('setting')),
        ]);
    }

    public function update(UpdateOutletRequest $request, Outlet $outlet): JsonResponse
    {
        $outlet = $this->outletService->update($outlet, $request->validated());

        return response()->json([
            'message' => 'Outlet berhasil diupdate.',
            'data' => new OutletResource($outlet),
        ]);
    }

    public function destroy(Request $request, Outlet $outlet): JsonResponse
    {
        abort_unless($request->user()->can('outlets.delete'), 403);

        $outlet->delete();

        return response()->json([
            'message' => 'Outlet berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapioutletsettingcontrollerphp"></a>
### app\Http\Controllers\Api\OutletSettingController.php
- SHA: `a9feef83b398`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `OutletSettingController` extends `Controller`**

Metode Publik:
- **show**(Request $request, Outlet $outlet) : *JsonResponse*
- **update**(UpdateOutletSettingRequest $request, Outlet $outlet) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Outlet\UpdateOutletSettingRequest;
use App\Http\Resources\OutletSettingResource;
use App\Models\Outlet;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OutletSettingController extends Controller
{
    public function show(Request $request, Outlet $outlet): JsonResponse
    {
        abort_unless($request->user()->can('outlet_settings.view'), 403);

        $setting = $outlet->setting()->firstOrCreate(
            ['outlet_id' => $outlet->id],
            [
                'tax_percent' => 0,
                'service_charge_percent' => 0,
                'currency_code' => 'IDR',
                'timezone' => 'Asia/Jakarta',
                'allow_negative_stock' => false,
                'low_stock_notification_enabled' => true,
            ]
        );

        return response()->json([
            'message' => 'Setting outlet berhasil diambil.',
            'data' => new OutletSettingResource($setting),
        ]);
    }

    public function update(UpdateOutletSettingRequest $request, Outlet $outlet): JsonResponse
    {
        $setting = $outlet->setting()->firstOrCreate(
            ['outlet_id' => $outlet->id],
            [
                'tax_percent' => 0,
                'service_charge_percent' => 0,
                'currency_code' => 'IDR',
                'timezone' => 'Asia/Jakarta',
                'allow_negative_stock' => false,
                'low_stock_notification_enabled' => true,
            ]
        );

        $setting->update($request->validated());

        return response()->json([
            'message' => 'Setting outlet berhasil diupdate.',
            'data' => new OutletSettingResource($setting->fresh()),
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapipermissioncontrollerphp"></a>
### app\Http\Controllers\Api\PermissionController.php
- SHA: `1951779b0d55`  
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
            ->paginate((int) $request->input('per_page', 20));

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

<a id="file-apphttpcontrollersapiproductcategorycontrollerphp"></a>
### app\Http\Controllers\Api\ProductCategoryController.php
- SHA: `59363377219b`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `ProductCategoryController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **store**(StoreProductCategoryRequest $request) : *JsonResponse*
- **show**(Request $request, ProductCategory $productCategory) : *JsonResponse*
- **update**(UpdateProductCategoryRequest $request, ProductCategory $productCategory) : *JsonResponse*
- **destroy**(Request $request, ProductCategory $productCategory) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductCategory\StoreProductCategoryRequest;
use App\Http\Requests\Api\ProductCategory\UpdateProductCategoryRequest;
use App\Http\Resources\ProductCategoryResource;
use App\Models\ProductCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('product_categories.view'), 403);

        $categories = ProductCategory::query()
            ->withCount('products')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('slug', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->orderBy('sort_order')
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar kategori produk berhasil diambil.',
            'data' => ProductCategoryResource::collection($categories),
            'meta' => [
                'current_page' => $categories->currentPage(),
                'last_page' => $categories->lastPage(),
                'per_page' => $categories->perPage(),
                'total' => $categories->total(),
            ],
        ]);
    }

    public function store(StoreProductCategoryRequest $request): JsonResponse
    {
        $payload = $request->validated();

        if (empty($payload['slug'] ?? null) && !empty($payload['name'])) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $category = ProductCategory::create($payload);

        return response()->json([
            'message' => 'Kategori produk berhasil dibuat.',
            'data' => new ProductCategoryResource($category),
        ], 201);
    }

    public function show(Request $request, ProductCategory $productCategory): JsonResponse
    {
        abort_unless($request->user()->can('product_categories.view'), 403);

        return response()->json([
            'message' => 'Detail kategori produk berhasil diambil.',
            'data' => new ProductCategoryResource($productCategory->loadCount('products')),
        ]);
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory): JsonResponse
    {
        $payload = $request->validated();

        if (array_key_exists('name', $payload) && empty($payload['slug'] ?? null)) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $productCategory->update($payload);

        return response()->json([
            'message' => 'Kategori produk berhasil diupdate.',
            'data' => new ProductCategoryResource($productCategory->fresh()->loadCount('products')),
        ]);
    }

    public function destroy(Request $request, ProductCategory $productCategory): JsonResponse
    {
        abort_unless($request->user()->can('product_categories.delete'), 403);

        if ($productCategory->products()->exists()) {
            return response()->json([
                'message' => 'Kategori tidak bisa dihapus karena masih dipakai produk.',
            ], 422);
        }

        $productCategory->delete();

        return response()->json([
            'message' => 'Kategori produk berhasil dihapus.',
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapiproductcontrollerphp"></a>
### app\Http\Controllers\Api\ProductController.php
- SHA: `f68e37059d38`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `ProductController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly ProductService $productService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreProductRequest $request) : *JsonResponse*
- **show**(Request $request, Product $product) : *JsonResponse*
- **update**(UpdateProductRequest $request, Product $product) : *JsonResponse*
- **destroy**(Request $request, Product $product) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Product\StoreProductRequest;
use App\Http\Requests\Api\Product\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\Catalog\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct(
        private readonly ProductService $productService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('products.view'), 403);

        $products = Product::query()
            ->with([
                'category',
                'prices.outlet',
                'outletStatuses.outlet',
                'variantGroups.options',
                'modifierGroups.options',
                'bundleItems.bundledProduct',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('sku', 'like', "%{$search}%")
                        ->orWhere('code', 'like', "%{$search}%")
                        ->orWhere('slug', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('product_category_id'), function ($query) use ($request) {
                $query->where('product_category_id', (int) $request->input('product_category_id'));
            })
            ->when($request->filled('product_type'), function ($query) use ($request) {
                $query->where('product_type', $request->string('product_type')->toString());
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar produk berhasil diambil.',
            'data' => ProductResource::collection($products),
            'meta' => [
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage(),
                'per_page' => $products->perPage(),
                'total' => $products->total(),
            ],
        ]);
    }

    public function store(StoreProductRequest $request): JsonResponse
    {
        $payload = $request->validated();

        if (empty($payload['slug'] ?? null) && !empty($payload['name'])) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $product = $this->productService->create($payload);

        return response()->json([
            'message' => 'Produk berhasil dibuat.',
            'data' => new ProductResource($product),
        ], 201);
    }

    public function show(Request $request, Product $product): JsonResponse
    {
        abort_unless($request->user()->can('products.view'), 403);

        return response()->json([
            'message' => 'Detail produk berhasil diambil.',
            'data' => new ProductResource($product->load([
                'category',
                'prices.outlet',
                'outletStatuses.outlet',
                'variantGroups.options',
                'modifierGroups.options',
                'bundleItems.bundledProduct',
            ])),
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product): JsonResponse
    {
        $payload = $request->validated();

        if (array_key_exists('name', $payload) && empty($payload['slug'] ?? null)) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $product = $this->productService->update($product, $payload);

        return response()->json([
            'message' => 'Produk berhasil diupdate.',
            'data' => new ProductResource($product),
        ]);
    }

    public function destroy(Request $request, Product $product): JsonResponse
    {
        abort_unless($request->user()->can('products.delete'), 403);

        $product->delete();

        return response()->json([
            'message' => 'Produk berhasil dihapus.',
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapirolecontrollerphp"></a>
### app\Http\Controllers\Api\RoleController.php
- SHA: `97504ea623be`  
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
            ->paginate((int) $request->input('per_page', 10));

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

<a id="file-apphttpcontrollersapisystemsettingcontrollerphp"></a>
### app\Http\Controllers\Api\SystemSettingController.php
- SHA: `b56a0cf65370`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `SystemSettingController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly SystemSettingService $systemSettingService)
- **index**(Request $request) : *JsonResponse*
- **upsert**(UpsertSystemSettingRequest $request) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SystemSetting\UpsertSystemSettingRequest;
use App\Http\Resources\SystemSettingResource;
use App\Models\SystemSetting;
use App\Services\SystemSetting\SystemSettingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SystemSettingController extends Controller
{
    public function __construct(
        private readonly SystemSettingService $systemSettingService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('system_settings.view'), 403);

        $settings = SystemSetting::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();
                $query->where('key', 'like', "%{$search}%");
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 20));

        return response()->json([
            'message' => 'Daftar system setting berhasil diambil.',
            'data' => SystemSettingResource::collection($settings),
            'meta' => [
                'current_page' => $settings->currentPage(),
                'last_page' => $settings->lastPage(),
                'per_page' => $settings->perPage(),
                'total' => $settings->total(),
            ],
        ]);
    }

    public function upsert(UpsertSystemSettingRequest $request): JsonResponse
    {
        $items = $this->systemSettingService->upsertMany($request->validated('settings'));

        return response()->json([
            'message' => 'System setting berhasil disimpan.',
            'data' => SystemSettingResource::collection($items),
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapiusercontrollerphp"></a>
### app\Http\Controllers\Api\UserController.php
- SHA: `0ded1f7eab8c`  
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
            ->with('roles', 'permissions', 'outletAccesses.outlet')
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
            ->paginate((int) $request->input('per_page', 10));

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
            'data' => new UserResource($user),
        ], 201);
    }

    public function show(Request $request, User $user): JsonResponse
    {
        abort_unless($request->user()->can('users.view'), 403);

        return response()->json([
            'message' => 'Detail user berhasil diambil.',
            'data' => new UserResource($user->load('roles', 'permissions', 'outletAccesses.outlet')),
        ]);
    }

    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        $user = $this->userService->update($user, $request->validated());

        return response()->json([
            'message' => 'User berhasil diupdate.',
            'data' => new UserResource($user),
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
- SHA: `c6ce3f5e4836`  
- Ukuran: 442 B  
- Namespace: `App\Http\Requests\Api\Auth`

**Class `LoginRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'login' => ['required', 'string'],
            'password' => ['required', 'string'],
            'device_name' => ['nullable', 'string', 'max:100'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapioutletstoreoutletrequestphp"></a>
### app\Http\Requests\Api\Outlet\StoreOutletRequest.php
- SHA: `71eba2a50f68`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Outlet`

**Class `StoreOutletRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Outlet;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOutletRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('outlets.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'code' => ['required', 'string', 'max:50', Rule::unique('outlets', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string'],
            'city' => ['nullable', 'string', 'max:100'],
            'province' => ['nullable', 'string', 'max:100'],
            'postal_code' => ['nullable', 'string', 'max:20'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'opening_time' => ['nullable', 'date_format:H:i'],
            'closing_time' => ['nullable', 'date_format:H:i'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapioutletupdateoutletrequestphp"></a>
### app\Http\Requests\Api\Outlet\UpdateOutletRequest.php
- SHA: `a80361284ab2`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Outlet`

**Class `UpdateOutletRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Outlet;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOutletRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('outlets.update') ?? false;
    }

    public function rules(): array
    {
        $outletId = $this->route('outlet')->id;

        return [
            'code' => ['sometimes', 'required', 'string', 'max:50', Rule::unique('outlets', 'code')->ignore($outletId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string'],
            'city' => ['nullable', 'string', 'max:100'],
            'province' => ['nullable', 'string', 'max:100'],
            'postal_code' => ['nullable', 'string', 'max:20'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'opening_time' => ['nullable', 'date_format:H:i'],
            'closing_time' => ['nullable', 'date_format:H:i'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapioutletupdateoutletsettingrequestphp"></a>
### app\Http\Requests\Api\Outlet\UpdateOutletSettingRequest.php
- SHA: `306c3e4912b0`  
- Ukuran: 995 B  
- Namespace: `App\Http\Requests\Api\Outlet`

**Class `UpdateOutletSettingRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Outlet;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Validation\Rule;

class UpdateOutletSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('outlet_settings.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'tax_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
            'service_charge_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
            'currency_code' => ['sometimes', 'string', 'max:10'],
            'receipt_footer' => ['nullable', 'string'],
            'invoice_prefix' => ['nullable', 'string', 'max:50'],
            'order_prefix' => ['nullable', 'string', 'max:50'],
            'timezone' => ['sometimes', 'string', 'max:100'],
            'allow_negative_stock' => ['sometimes', 'boolean'],
            'low_stock_notification_enabled' => ['sometimes', 'boolean'],
        ];
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

<a id="file-apphttprequestsapiproductstoreproductrequestphp"></a>
### app\Http\Requests\Api\Product\StoreProductRequest.php
- SHA: `5ffe89a56265`  
- Ukuran: 5 KB  
- Namespace: `App\Http\Requests\Api\Product`

**Class `StoreProductRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
- **withValidator**($validator) : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('products.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'product_category_id' => ['required', 'integer', 'exists:product_categories,id'],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('products', 'sku')],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('products', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('products', 'slug')],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'string', 'max:2048'],
            'base_price' => ['required', 'numeric', 'min:0'],
            'product_type' => ['required', Rule::in(['single', 'bundle'])],
            'is_active' => ['sometimes', 'boolean'],
            'is_featured' => ['sometimes', 'boolean'],
            'track_recipe' => ['sometimes', 'boolean'],
            'track_stock_direct' => ['sometimes', 'boolean'],

            'prices' => ['nullable', 'array'],
            'prices.*.outlet_id' => ['required_with:prices', 'integer', 'exists:outlets,id'],
            'prices.*.price' => ['required_with:prices', 'numeric', 'min:0'],
            'prices.*.dine_in_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.takeaway_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.delivery_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.starts_at' => ['nullable', 'date'],
            'prices.*.ends_at' => ['nullable', 'date'],
            'prices.*.is_active' => ['sometimes', 'boolean'],

            'outlet_statuses' => ['nullable', 'array'],
            'outlet_statuses.*.outlet_id' => ['required_with:outlet_statuses', 'integer', 'exists:outlets,id'],
            'outlet_statuses.*.is_available' => ['sometimes', 'boolean'],
            'outlet_statuses.*.is_hidden' => ['sometimes', 'boolean'],
            'outlet_statuses.*.daily_limit' => ['nullable', 'integer', 'min:0'],
            'outlet_statuses.*.notes' => ['nullable', 'string'],

            'variant_groups' => ['nullable', 'array'],
            'variant_groups.*.name' => ['required_with:variant_groups', 'string', 'max:255'],
            'variant_groups.*.selection_type' => ['required_with:variant_groups', Rule::in(['single', 'multiple'])],
            'variant_groups.*.is_required' => ['sometimes', 'boolean'],
            'variant_groups.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'variant_groups.*.options' => ['required_with:variant_groups', 'array', 'min:1'],
            'variant_groups.*.options.*.name' => ['required', 'string', 'max:255'],
            'variant_groups.*.options.*.price_adjustment' => ['sometimes', 'numeric', 'min:0'],
            'variant_groups.*.options.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'variant_groups.*.options.*.is_active' => ['sometimes', 'boolean'],

            'modifier_groups' => ['nullable', 'array'],
            'modifier_groups.*.name' => ['required_with:modifier_groups', 'string', 'max:255'],
            'modifier_groups.*.min_select' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.max_select' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.is_required' => ['sometimes', 'boolean'],
            'modifier_groups.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.options' => ['required_with:modifier_groups', 'array', 'min:1'],
            'modifier_groups.*.options.*.name' => ['required', 'string', 'max:255'],
            'modifier_groups.*.options.*.price' => ['sometimes', 'numeric', 'min:0'],
            'modifier_groups.*.options.*.is_active' => ['sometimes', 'boolean'],
            'modifier_groups.*.options.*.sort_order' => ['sometimes', 'integer', 'min:0'],

            'bundle_items' => ['nullable', 'array'],
            'bundle_items.*.bundled_product_id' => ['required_with:bundle_items', 'integer', 'exists:products,id'],
            'bundle_items.*.qty' => ['required_with:bundle_items', 'numeric', 'gt:0'],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            foreach (($this->input('modifier_groups') ?? []) as $index => $group) {
                $min = (int) ($group['min_select'] ?? 0);
                $max = (int) ($group['max_select'] ?? 1);

                if ($max < $min) {
                    $validator->errors()->add(
                        "modifier_groups.$index.max_select",
                        'max_select tidak boleh lebih kecil dari min_select.'
                    );
                }
            }
        });
    }
}
```
</details>

<a id="file-apphttprequestsapiproductupdateproductrequestphp"></a>
### app\Http\Requests\Api\Product\UpdateProductRequest.php
- SHA: `e909f93495d9`  
- Ukuran: 5 KB  
- Namespace: `App\Http\Requests\Api\Product`

**Class `UpdateProductRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
- **withValidator**($validator) : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('products.update') ?? false;
    }

    public function rules(): array
    {
        $productId = $this->route('product')->id;

        return [
            'product_category_id' => ['sometimes', 'required', 'integer', 'exists:product_categories,id'],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('products', 'sku')->ignore($productId)],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('products', 'code')->ignore($productId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('products', 'slug')->ignore($productId)],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'string', 'max:2048'],
            'base_price' => ['sometimes', 'required', 'numeric', 'min:0'],
            'product_type' => ['sometimes', 'required', Rule::in(['single', 'bundle'])],
            'is_active' => ['sometimes', 'boolean'],
            'is_featured' => ['sometimes', 'boolean'],
            'track_recipe' => ['sometimes', 'boolean'],
            'track_stock_direct' => ['sometimes', 'boolean'],

            'prices' => ['sometimes', 'array'],
            'prices.*.outlet_id' => ['required_with:prices', 'integer', 'exists:outlets,id'],
            'prices.*.price' => ['required_with:prices', 'numeric', 'min:0'],
            'prices.*.dine_in_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.takeaway_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.delivery_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.starts_at' => ['nullable', 'date'],
            'prices.*.ends_at' => ['nullable', 'date'],
            'prices.*.is_active' => ['sometimes', 'boolean'],

            'outlet_statuses' => ['sometimes', 'array'],
            'outlet_statuses.*.outlet_id' => ['required_with:outlet_statuses', 'integer', 'exists:outlets,id'],
            'outlet_statuses.*.is_available' => ['sometimes', 'boolean'],
            'outlet_statuses.*.is_hidden' => ['sometimes', 'boolean'],
            'outlet_statuses.*.daily_limit' => ['nullable', 'integer', 'min:0'],
            'outlet_statuses.*.notes' => ['nullable', 'string'],

            'variant_groups' => ['sometimes', 'array'],
            'variant_groups.*.name' => ['required_with:variant_groups', 'string', 'max:255'],
            'variant_groups.*.selection_type' => ['required_with:variant_groups', Rule::in(['single', 'multiple'])],
            'variant_groups.*.is_required' => ['sometimes', 'boolean'],
            'variant_groups.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'variant_groups.*.options' => ['required_with:variant_groups', 'array', 'min:1'],
            'variant_groups.*.options.*.name' => ['required', 'string', 'max:255'],
            'variant_groups.*.options.*.price_adjustment' => ['sometimes', 'numeric', 'min:0'],
            'variant_groups.*.options.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'variant_groups.*.options.*.is_active' => ['sometimes', 'boolean'],

            'modifier_groups' => ['sometimes', 'array'],
            'modifier_groups.*.name' => ['required_with:modifier_groups', 'string', 'max:255'],
            'modifier_groups.*.min_select' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.max_select' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.is_required' => ['sometimes', 'boolean'],
            'modifier_groups.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.options' => ['required_with:modifier_groups', 'array', 'min:1'],
            'modifier_groups.*.options.*.name' => ['required', 'string', 'max:255'],
            'modifier_groups.*.options.*.price' => ['sometimes', 'numeric', 'min:0'],
            'modifier_groups.*.options.*.is_active' => ['sometimes', 'boolean'],
            'modifier_groups.*.options.*.sort_order' => ['sometimes', 'integer', 'min:0'],

            'bundle_items' => ['sometimes', 'array'],
            'bundle_items.*.bundled_product_id' => ['required_with:bundle_items', 'integer', 'exists:products,id'],
            'bundle_items.*.qty' => ['required_with:bundle_items', 'numeric', 'gt:0'],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            foreach (($this->input('modifier_groups') ?? []) as $index => $group) {
                $min = (int) ($group['min_select'] ?? 0);
                $max = (int) ($group['max_select'] ?? 1);

                if ($max < $min) {
                    $validator->errors()->add(
                        "modifier_groups.$index.max_select",
                        'max_select tidak boleh lebih kecil dari min_select.'
                    );
                }
            }
        });
    }
}
```
</details>

<a id="file-apphttprequestsapiproductcategorystoreproductcategoryrequestphp"></a>
### app\Http\Requests\Api\ProductCategory\StoreProductCategoryRequest.php
- SHA: `92d80ebeaba4`  
- Ukuran: 665 B  
- Namespace: `App\Http\Requests\Api\ProductCategory`

**Class `StoreProductCategoryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('product_categories.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('product_categories', 'slug')],
            'sort_order' => ['sometimes', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapiproductcategoryupdateproductcategoryrequestphp"></a>
### app\Http\Requests\Api\ProductCategory\UpdateProductCategoryRequest.php
- SHA: `22d5a93e4a94`  
- Ukuran: 760 B  
- Namespace: `App\Http\Requests\Api\ProductCategory`

**Class `UpdateProductCategoryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('product_categories.update') ?? false;
    }

    public function rules(): array
    {
        $categoryId = $this->route('productCategory')->id;

        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('product_categories', 'slug')->ignore($categoryId)],
            'sort_order' => ['sometimes', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
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

<a id="file-apphttprequestsapisystemsettingupsertsystemsettingrequestphp"></a>
### app\Http\Requests\Api\SystemSetting\UpsertSystemSettingRequest.php
- SHA: `362962d56221`  
- Ukuran: 657 B  
- Namespace: `App\Http\Requests\Api\SystemSetting`

**Class `UpsertSystemSettingRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\SystemSetting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpsertSystemSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('system_settings.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'settings' => ['required', 'array', 'min:1'],
            'settings.*.key' => ['required', 'string', 'max:150'],
            'settings.*.value' => ['nullable'],
            'settings.*.type' => ['required', Rule::in(['string', 'number', 'boolean', 'json'])],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiuserstoreuserrequestphp"></a>
### app\Http\Requests\Api\User\StoreUserRequest.php
- SHA: `f6a1a4ba9a6c`  
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

            'outlet_ids' => ['nullable', 'array'],
            'outlet_ids.*' => ['integer', 'exists:outlets,id'],
            'default_outlet_id' => ['nullable', 'integer', 'exists:outlets,id'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapiuserupdateuserrequestphp"></a>
### app\Http\Requests\Api\User\UpdateUserRequest.php
- SHA: `2150a6d77c4f`  
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

            'outlet_ids' => ['sometimes', 'array'],
            'outlet_ids.*' => ['integer', 'exists:outlets,id'],
            'default_outlet_id' => ['nullable', 'integer', 'exists:outlets,id'],
        ];
    }
}
```
</details>


## API Resources (app/Http/Resources)

<a id="file-apphttpresourcesoutletresourcephp"></a>
### app\Http\Resources\OutletResource.php
- SHA: `ee02964067b6`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `OutletResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OutletResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'province' => $this->province,
            'postal_code' => $this->postal_code,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'opening_time' => $this->opening_time,
            'closing_time' => $this->closing_time,
            'is_active' => $this->is_active,
            'setting' => new OutletSettingResource($this->whenLoaded('setting')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesoutletsettingresourcephp"></a>
### app\Http\Resources\OutletSettingResource.php
- SHA: `5c352a02e571`  
- Ukuran: 964 B  
- Namespace: `App\Http\Resources`

**Class `OutletSettingResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OutletSettingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'tax_percent' => $this->tax_percent,
            'service_charge_percent' => $this->service_charge_percent,
            'currency_code' => $this->currency_code,
            'receipt_footer' => $this->receipt_footer,
            'invoice_prefix' => $this->invoice_prefix,
            'order_prefix' => $this->order_prefix,
            'timezone' => $this->timezone,
            'allow_negative_stock' => $this->allow_negative_stock,
            'low_stock_notification_enabled' => $this->low_stock_notification_enabled,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

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

<a id="file-apphttpresourcesproductbundleitemresourcephp"></a>
### app\Http\Resources\ProductBundleItemResource.php
- SHA: `9f89169b71b4`  
- Ukuran: 671 B  
- Namespace: `App\Http\Resources`

**Class `ProductBundleItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductBundleItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'bundled_product_id' => $this->bundled_product_id,
            'bundled_product_name' => $this->bundledProduct?->name,
            'bundled_product_code' => $this->bundledProduct?->code,
            'qty' => $this->qty,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesproductcategoryresourcephp"></a>
### app\Http\Resources\ProductCategoryResource.php
- SHA: `e4b8aa020397`  
- Ukuran: 662 B  
- Namespace: `App\Http\Resources`

**Class `ProductCategoryResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductCategoryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'sort_order' => $this->sort_order,
            'is_active' => $this->is_active,
            'products_count' => $this->whenCounted('products'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductmodifiergroupresourcephp"></a>
### app\Http\Resources\ProductModifierGroupResource.php
- SHA: `250e72393278`  
- Ukuran: 764 B  
- Namespace: `App\Http\Resources`

**Class `ProductModifierGroupResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductModifierGroupResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'name' => $this->name,
            'min_select' => $this->min_select,
            'max_select' => $this->max_select,
            'is_required' => $this->is_required,
            'sort_order' => $this->sort_order,
            'options' => ProductModifierOptionResource::collection($this->whenLoaded('options')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductmodifieroptionresourcephp"></a>
### app\Http\Resources\ProductModifierOptionResource.php
- SHA: `f5ee65fec14c`  
- Ukuran: 636 B  
- Namespace: `App\Http\Resources`

**Class `ProductModifierOptionResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductModifierOptionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_modifier_group_id' => $this->product_modifier_group_id,
            'name' => $this->name,
            'price' => $this->price,
            'is_active' => $this->is_active,
            'sort_order' => $this->sort_order,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductoutletstatusresourcephp"></a>
### app\Http\Resources\ProductOutletStatusResource.php
- SHA: `7bd88aa5aff6`  
- Ukuran: 722 B  
- Namespace: `App\Http\Resources`

**Class `ProductOutletStatusResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductOutletStatusResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'outlet_code' => $this->outlet?->code,
            'is_available' => $this->is_available,
            'is_hidden' => $this->is_hidden,
            'daily_limit' => $this->daily_limit,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductpriceresourcephp"></a>
### app\Http\Resources\ProductPriceResource.php
- SHA: `92f07786c52b`  
- Ukuran: 864 B  
- Namespace: `App\Http\Resources`

**Class `ProductPriceResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductPriceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'outlet_code' => $this->outlet?->code,
            'price' => $this->price,
            'dine_in_price' => $this->dine_in_price,
            'takeaway_price' => $this->takeaway_price,
            'delivery_price' => $this->delivery_price,
            'starts_at' => $this->starts_at,
            'ends_at' => $this->ends_at,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductresourcephp"></a>
### app\Http\Resources\ProductResource.php
- SHA: `ea7bb2ff599b`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Resources`

**Class `ProductResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_category_id' => $this->product_category_id,
            'category' => $this->whenLoaded('category', function () {
                return [
                    'id' => $this->category?->id,
                    'name' => $this->category?->name,
                    'slug' => $this->category?->slug,
                ];
            }),
            'sku' => $this->sku,
            'code' => $this->code,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'image_url' => $this->image_url,
            'base_price' => $this->base_price,
            'product_type' => $this->product_type,
            'is_active' => $this->is_active,
            'is_featured' => $this->is_featured,
            'track_recipe' => $this->track_recipe,
            'track_stock_direct' => $this->track_stock_direct,
            'prices' => ProductPriceResource::collection($this->whenLoaded('prices')),
            'outlet_statuses' => ProductOutletStatusResource::collection($this->whenLoaded('outletStatuses')),
            'variant_groups' => ProductVariantGroupResource::collection($this->whenLoaded('variantGroups')),
            'modifier_groups' => ProductModifierGroupResource::collection($this->whenLoaded('modifierGroups')),
            'bundle_items' => ProductBundleItemResource::collection($this->whenLoaded('bundleItems')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductvariantgroupresourcephp"></a>
### app\Http\Resources\ProductVariantGroupResource.php
- SHA: `02cc4b51a358`  
- Ukuran: 723 B  
- Namespace: `App\Http\Resources`

**Class `ProductVariantGroupResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductVariantGroupResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'name' => $this->name,
            'selection_type' => $this->selection_type,
            'is_required' => $this->is_required,
            'sort_order' => $this->sort_order,
            'options' => ProductVariantOptionResource::collection($this->whenLoaded('options')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductvariantoptionresourcephp"></a>
### app\Http\Resources\ProductVariantOptionResource.php
- SHA: `c6815e192925`  
- Ukuran: 655 B  
- Namespace: `App\Http\Resources`

**Class `ProductVariantOptionResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductVariantOptionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_variant_group_id' => $this->product_variant_group_id,
            'name' => $this->name,
            'price_adjustment' => $this->price_adjustment,
            'sort_order' => $this->sort_order,
            'is_active' => $this->is_active,
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

<a id="file-apphttpresourcessystemsettingresourcephp"></a>
### app\Http\Resources\SystemSettingResource.php
- SHA: `ed7c14655129`  
- Ukuran: 493 B  
- Namespace: `App\Http\Resources`

**Class `SystemSettingResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SystemSettingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'key' => $this->key,
            'value' => $this->value,
            'type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesuserresourcephp"></a>
### app\Http\Resources\UserResource.php
- SHA: `7959fd418c6a`  
- Ukuran: 1 KB  
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
            'outlet_accesses' => $this->whenLoaded('outletAccesses', function () {
                return $this->outletAccesses->map(function ($access) {
                    return [
                        'id' => $access->id,
                        'outlet_id' => $access->outlet_id,
                        'outlet_name' => $access->outlet?->name,
                        'outlet_code' => $access->outlet?->code,
                        'is_default' => $access->is_default,
                    ];
                })->values();
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>


## Models (app/Models)

<a id="file-appmodelsoutletphp"></a>
### app\Models\Outlet.php
- SHA: `d884c586da69`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `Outlet` extends `Model`**

Metode Publik:
- **setting**() : *HasOne*
- **userAccesses**() : *HasMany*
- **users**() : *BelongsToMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Outlet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'phone',
        'email',
        'address',
        'city',
        'province',
        'postal_code',
        'latitude',
        'longitude',
        'opening_time',
        'closing_time',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'latitude' => 'decimal:7',
            'longitude' => 'decimal:7',
            'is_active' => 'boolean',
        ];
    }

    public function setting(): HasOne
    {
        return $this->hasOne(OutletSetting::class);
    }

    public function userAccesses(): HasMany
    {
        return $this->hasMany(UserOutletAccess::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_outlet_accesses')
            ->withPivot('is_default')
            ->withTimestamps();
    }
}

```
</details>

<a id="file-appmodelsoutletsettingphp"></a>
### app\Models\OutletSetting.php
- SHA: `699d875583f7`  
- Ukuran: 930 B  
- Namespace: `App\Models`

**Class `OutletSetting` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OutletSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'tax_percent',
        'service_charge_percent',
        'currency_code',
        'receipt_footer',
        'invoice_prefix',
        'order_prefix',
        'timezone',
        'allow_negative_stock',
        'low_stock_notification_enabled',
    ];

    protected function casts(): array
    {
        return [
            'tax_percent' => 'decimal:2',
            'service_charge_percent' => 'decimal:2',
            'allow_negative_stock' => 'boolean',
            'low_stock_notification_enabled' => 'boolean',
        ];
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }
}

```
</details>

<a id="file-appmodelsproductphp"></a>
### app\Models\Product.php
- SHA: `edea345311c2`  
- Ukuran: 2 KB  
- Namespace: `App\Models`

**Class `Product` extends `Model`**

Metode Publik:
- **category**() : *BelongsTo*
- **prices**() : *HasMany*
- **outletStatuses**() : *HasMany*
- **variantGroups**() : *HasMany*
- **modifierGroups**() : *HasMany*
- **bundleItems**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_category_id',
        'sku',
        'code',
        'name',
        'slug',
        'description',
        'image_url',
        'base_price',
        'product_type',
        'is_active',
        'is_featured',
        'track_recipe',
        'track_stock_direct',
    ];

    protected function casts(): array
    {
        return [
            'base_price' => 'decimal:2',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
            'track_recipe' => 'boolean',
            'track_stock_direct' => 'boolean',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function prices(): HasMany
    {
        return $this->hasMany(ProductPrice::class);
    }

    public function outletStatuses(): HasMany
    {
        return $this->hasMany(ProductOutletStatus::class);
    }

    public function variantGroups(): HasMany
    {
        return $this->hasMany(ProductVariantGroup::class)->orderBy('sort_order');
    }

    public function modifierGroups(): HasMany
    {
        return $this->hasMany(ProductModifierGroup::class)->orderBy('sort_order');
    }

    public function bundleItems(): HasMany
    {
        return $this->hasMany(ProductBundleItem::class);
    }
}
```
</details>

<a id="file-appmodelsproductbundleitemphp"></a>
### app\Models\ProductBundleItem.php
- SHA: `d56fe2680d6d`  
- Ukuran: 692 B  
- Namespace: `App\Models`

**Class `ProductBundleItem` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **bundledProduct**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductBundleItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'bundled_product_id',
        'qty',
    ];

    protected function casts(): array
    {
        return [
            'qty' => 'decimal:3',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function bundledProduct(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'bundled_product_id');
    }
}
```
</details>

<a id="file-appmodelsproductcategoryphp"></a>
### app\Models\ProductCategory.php
- SHA: `298e808e9cab`  
- Ukuran: 663 B  
- Namespace: `App\Models`

**Class `ProductCategory` extends `Model`**

Metode Publik:
- **products**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
```
</details>

<a id="file-appmodelsproductmodifiergroupphp"></a>
### app\Models\ProductModifierGroup.php
- SHA: `5db13c155591`  
- Ukuran: 934 B  
- Namespace: `App\Models`

**Class `ProductModifierGroup` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **options**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductModifierGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'min_select',
        'max_select',
        'is_required',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'min_select' => 'integer',
            'max_select' => 'integer',
            'is_required' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function options(): HasMany
    {
        return $this->hasMany(ProductModifierOption::class)->orderBy('sort_order');
    }
}
```
</details>

<a id="file-appmodelsproductmodifieroptionphp"></a>
### app\Models\ProductModifierOption.php
- SHA: `d675b3d2c93e`  
- Ukuran: 729 B  
- Namespace: `App\Models`

**Class `ProductModifierOption` extends `Model`**

Metode Publik:
- **group**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductModifierOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_modifier_group_id',
        'name',
        'price',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(ProductModifierGroup::class, 'product_modifier_group_id');
    }
}
```
</details>

<a id="file-appmodelsproductoutletstatusphp"></a>
### app\Models\ProductOutletStatus.php
- SHA: `39899ec8636f`  
- Ukuran: 809 B  
- Namespace: `App\Models`

**Class `ProductOutletStatus` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **outlet**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductOutletStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'outlet_id',
        'is_available',
        'is_hidden',
        'daily_limit',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'is_available' => 'boolean',
            'is_hidden' => 'boolean',
            'daily_limit' => 'integer',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }
}
```
</details>

<a id="file-appmodelsproductpricephp"></a>
### app\Models\ProductPrice.php
- SHA: `17eec45a872d`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `ProductPrice` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **outlet**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'outlet_id',
        'price',
        'dine_in_price',
        'takeaway_price',
        'delivery_price',
        'starts_at',
        'ends_at',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'dine_in_price' => 'decimal:2',
            'takeaway_price' => 'decimal:2',
            'delivery_price' => 'decimal:2',
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }
}
```
</details>

<a id="file-appmodelsproductvariantgroupphp"></a>
### app\Models\ProductVariantGroup.php
- SHA: `bb0670758ac6`  
- Ukuran: 836 B  
- Namespace: `App\Models`

**Class `ProductVariantGroup` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **options**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductVariantGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'selection_type',
        'is_required',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_required' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function options(): HasMany
    {
        return $this->hasMany(ProductVariantOption::class)->orderBy('sort_order');
    }
}
```
</details>

<a id="file-appmodelsproductvariantoptionphp"></a>
### app\Models\ProductVariantOption.php
- SHA: `12c603169490`  
- Ukuran: 747 B  
- Namespace: `App\Models`

**Class `ProductVariantOption` extends `Model`**

Metode Publik:
- **group**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariantOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_variant_group_id',
        'name',
        'price_adjustment',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'price_adjustment' => 'decimal:2',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(ProductVariantGroup::class, 'product_variant_group_id');
    }
}
```
</details>

<a id="file-appmodelssystemsettingphp"></a>
### app\Models\SystemSetting.php
- SHA: `c7a02089b290`  
- Ukuran: 268 B  
- Namespace: `App\Models`

**Class `SystemSetting` extends `Model`**
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
    ];
}

```
</details>

<a id="file-appmodelsuserphp"></a>
### app\Models\User.php
- SHA: `d8223604cb81`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `User` extends `Authenticatable`**

Metode Publik:
- **outletAccesses**() : *HasMany*
- **outlets**() : *BelongsToMany*
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
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
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

    public function outletAccesses(): HasMany
    {
        return $this->hasMany(UserOutletAccess::class);
    }

    public function outlets(): BelongsToMany
    {
        return $this->belongsToMany(Outlet::class, 'user_outlet_accesses')
            ->withPivot('is_default')
            ->withTimestamps();
    }
}

```
</details>

<a id="file-appmodelsuseroutletaccessphp"></a>
### app\Models\UserOutletAccess.php
- SHA: `6094a73890e7`  
- Ukuran: 655 B  
- Namespace: `App\Models`

**Class `UserOutletAccess` extends `Model`**

Metode Publik:
- **user**() : *BelongsTo*
- **outlet**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserOutletAccess extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'outlet_id',
        'is_default',
    ];

    protected function casts(): array
    {
        return [
            'is_default' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
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

<a id="file-appservicescatalogproductservicephp"></a>
### app\Services\Catalog\ProductService.php
- SHA: `dfa157da5777`  
- Ukuran: 8 KB  
- Namespace: `App\Services\Catalog`

**Class `ProductService`**

Metode Publik:
- **create**(array $payload) : *Product*
- **update**(Product $product, array $payload) : *Product*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Catalog;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ProductService
{
    public function create(array $payload): Product
    {
        return DB::transaction(function () use ($payload) {
            $prices = $payload['prices'] ?? [];
            $outletStatuses = $payload['outlet_statuses'] ?? [];
            $variantGroups = $payload['variant_groups'] ?? [];
            $modifierGroups = $payload['modifier_groups'] ?? [];
            $bundleItems = $payload['bundle_items'] ?? [];

            unset(
                $payload['prices'],
                $payload['outlet_statuses'],
                $payload['variant_groups'],
                $payload['modifier_groups'],
                $payload['bundle_items'],
            );

            $product = Product::create($payload);

            $this->validateBundleRules($product, $bundleItems);
            $this->syncPrices($product, $prices);
            $this->syncOutletStatuses($product, $outletStatuses);
            $this->syncVariantGroups($product, $variantGroups);
            $this->syncModifierGroups($product, $modifierGroups);
            $this->syncBundleItems($product, $bundleItems);

            return $this->loadRelations($product);
        });
    }

    public function update(Product $product, array $payload): Product
    {
        return DB::transaction(function () use ($product, $payload) {
            $hasPrices = array_key_exists('prices', $payload);
            $hasStatuses = array_key_exists('outlet_statuses', $payload);
            $hasVariantGroups = array_key_exists('variant_groups', $payload);
            $hasModifierGroups = array_key_exists('modifier_groups', $payload);
            $hasBundleItems = array_key_exists('bundle_items', $payload);

            $prices = $payload['prices'] ?? [];
            $outletStatuses = $payload['outlet_statuses'] ?? [];
            $variantGroups = $payload['variant_groups'] ?? [];
            $modifierGroups = $payload['modifier_groups'] ?? [];
            $bundleItems = $payload['bundle_items'] ?? [];

            unset(
                $payload['prices'],
                $payload['outlet_statuses'],
                $payload['variant_groups'],
                $payload['modifier_groups'],
                $payload['bundle_items'],
            );

            $product->update($payload);

            if ($hasBundleItems || (isset($payload['product_type']) && $product->product_type === 'bundle')) {
                $this->validateBundleRules($product, $bundleItems);
            }

            if ($hasPrices) {
                $this->syncPrices($product, $prices);
            }

            if ($hasStatuses) {
                $this->syncOutletStatuses($product, $outletStatuses);
            }

            if ($hasVariantGroups) {
                $this->syncVariantGroups($product, $variantGroups);
            }

            if ($hasModifierGroups) {
                $this->syncModifierGroups($product, $modifierGroups);
            }

            if ($hasBundleItems) {
                $this->syncBundleItems($product, $bundleItems);
            }

            return $this->loadRelations($product);
        });
    }

    private function syncPrices(Product $product, array $prices): void
    {
        $product->prices()->delete();

        foreach ($prices as $price) {
            $product->prices()->create([
                'outlet_id' => $price['outlet_id'],
                'price' => $price['price'],
                'dine_in_price' => $price['dine_in_price'] ?? null,
                'takeaway_price' => $price['takeaway_price'] ?? null,
                'delivery_price' => $price['delivery_price'] ?? null,
                'starts_at' => $price['starts_at'] ?? null,
                'ends_at' => $price['ends_at'] ?? null,
                'is_active' => $price['is_active'] ?? true,
            ]);
        }
    }

    private function syncOutletStatuses(Product $product, array $outletStatuses): void
    {
        $product->outletStatuses()->delete();

        foreach ($outletStatuses as $status) {
            $product->outletStatuses()->create([
                'outlet_id' => $status['outlet_id'],
                'is_available' => $status['is_available'] ?? true,
                'is_hidden' => $status['is_hidden'] ?? false,
                'daily_limit' => $status['daily_limit'] ?? null,
                'notes' => $status['notes'] ?? null,
            ]);
        }
    }

    private function syncVariantGroups(Product $product, array $variantGroups): void
    {
        $product->variantGroups()->delete();

        foreach ($variantGroups as $group) {
            $options = $group['options'] ?? [];
            unset($group['options']);

            $variantGroup = $product->variantGroups()->create([
                'name' => $group['name'],
                'selection_type' => $group['selection_type'],
                'is_required' => $group['is_required'] ?? true,
                'sort_order' => $group['sort_order'] ?? 0,
            ]);

            foreach ($options as $option) {
                $variantGroup->options()->create([
                    'name' => $option['name'],
                    'price_adjustment' => $option['price_adjustment'] ?? 0,
                    'sort_order' => $option['sort_order'] ?? 0,
                    'is_active' => $option['is_active'] ?? true,
                ]);
            }
        }
    }

    private function syncModifierGroups(Product $product, array $modifierGroups): void
    {
        $product->modifierGroups()->delete();

        foreach ($modifierGroups as $group) {
            $options = $group['options'] ?? [];
            unset($group['options']);

            $modifierGroup = $product->modifierGroups()->create([
                'name' => $group['name'],
                'min_select' => $group['min_select'] ?? 0,
                'max_select' => $group['max_select'] ?? 1,
                'is_required' => $group['is_required'] ?? false,
                'sort_order' => $group['sort_order'] ?? 0,
            ]);

            foreach ($options as $option) {
                $modifierGroup->options()->create([
                    'name' => $option['name'],
                    'price' => $option['price'] ?? 0,
                    'is_active' => $option['is_active'] ?? true,
                    'sort_order' => $option['sort_order'] ?? 0,
                ]);
            }
        }
    }

    private function syncBundleItems(Product $product, array $bundleItems): void
    {
        $product->bundleItems()->delete();

        foreach ($bundleItems as $item) {
            $product->bundleItems()->create([
                'bundled_product_id' => $item['bundled_product_id'],
                'qty' => $item['qty'],
            ]);
        }
    }

    private function validateBundleRules(Product $product, array $bundleItems): void
    {
        if ($product->product_type === 'bundle' && empty($bundleItems)) {
            throw ValidationException::withMessages([
                'bundle_items' => ['Produk bundle wajib memiliki minimal satu bundle item.'],
            ]);
        }

        foreach ($bundleItems as $index => $item) {
            if ((int) $item['bundled_product_id'] === (int) $product->id) {
                throw ValidationException::withMessages([
                    "bundle_items.$index.bundled_product_id" => ['Produk bundle tidak boleh membundle dirinya sendiri.'],
                ]);
            }
        }
    }

    private function loadRelations(Product $product): Product
    {
        return $product->fresh()->load([
            'category',
            'prices.outlet',
            'outletStatuses.outlet',
            'variantGroups.options',
            'modifierGroups.options',
            'bundleItems.bundledProduct',
        ]);
    }
}
```
</details>

<a id="file-appservicesoutletoutletservicephp"></a>
### app\Services\Outlet\OutletService.php
- SHA: `7b229eac14f4`  
- Ukuran: 933 B  
- Namespace: `App\Services\Outlet`

**Class `OutletService`**

Metode Publik:
- **create**(array $payload) : *Outlet*
- **update**(Outlet $outlet, array $payload) : *Outlet*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Outlet;

use App\Models\Outlet;
use Illuminate\Support\Facades\DB;

class OutletService
{
    public function create(array $payload): Outlet
    {
        return DB::transaction(function () use ($payload) {
            $outlet = Outlet::create($payload);

            $outlet->setting()->create([
                'tax_percent' => 0,
                'service_charge_percent' => 0,
                'currency_code' => 'IDR',
                'timezone' => 'Asia/Jakarta',
                'allow_negative_stock' => false,
                'low_stock_notification_enabled' => true,
            ]);

            return $outlet->load('setting');
        });
    }

    public function update(Outlet $outlet, array $payload): Outlet
    {
        return DB::transaction(function () use ($outlet, $payload) {
            $outlet->update($payload);

            return $outlet->load('setting');
        });
    }
}

```
</details>

<a id="file-appservicessystemsettingsystemsettingservicephp"></a>
### app\Services\SystemSetting\SystemSettingService.php
- SHA: `87e179c3a4f9`  
- Ukuran: 1 KB  
- Namespace: `App\Services\SystemSetting`

**Class `SystemSettingService`**

Metode Publik:
- **upsertMany**(array $settings) : *Collection*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\SystemSetting;

use App\Models\SystemSetting;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SystemSettingService
{
    public function upsertMany(array $settings): Collection
    {
        return DB::transaction(function () use ($settings) {
            $items = collect();

            foreach ($settings as $setting) {
                $items->push(
                    SystemSetting::updateOrCreate(
                        ['key' => $setting['key']],
                        [
                            'value' => $this->normalizeValue($setting['value'] ?? null, $setting['type']),
                            'type' => $setting['type'],
                        ]
                    )
                );
            }

            return $items;
        });
    }

    private function normalizeValue(mixed $value, string $type): mixed
    {
        return match ($type) {
            'boolean' => is_null($value) ? null : ($value ? '1' : '0'),
            'json' => is_null($value) ? null : json_encode($value, JSON_UNESCAPED_UNICODE),
            default => is_null($value) ? null : (string) $value,
        };
    }
}

```
</details>

<a id="file-appservicesuseruserservicephp"></a>
### app\Services\User\UserService.php
- SHA: `80d032ca528f`  
- Ukuran: 3 KB  
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
- SHA: `38a4442365d9`  
- Ukuran: 2 KB  
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

            'outlets.view',
            'outlets.create',
            'outlets.update',
            'outlets.delete',

            'outlet_settings.view',
            'outlet_settings.update',

            'system_settings.view',
            'system_settings.update',

            'product_categories.view',
            'product_categories.create',
            'product_categories.update',
            'product_categories.delete',

            'products.view',
            'products.create',
            'products.update',
            'products.delete',

            'product_variants.view',
            'product_variants.create',
            'product_variants.update',
            'product_variants.delete',

            'product_modifiers.view',
            'product_modifiers.create',
            'product_modifiers.update',
            'product_modifiers.delete',

            'product_bundles.view',
            'product_bundles.create',
            'product_bundles.update',
            'product_bundles.delete',
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
- SHA: `a0b37f724173`  
- Ukuran: 3 KB  
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
        $adminOutlet = Role::findOrCreate('admin_outlet', 'sanctum');
        $owner = Role::findOrCreate('owner', 'sanctum');

        $allPermissions = Permission::query()->pluck('name')->all();

        $superadmin->syncPermissions($allPermissions);

        $adminPusat->syncPermissions([
            'users.view',
            'users.create',
            'users.update',
            'roles.view',
            'permissions.view',
            'outlets.view',
            'outlets.create',
            'outlets.update',
            'outlet_settings.view',
            'outlet_settings.update',
            'system_settings.view',
            'system_settings.update',
            'product_categories.view',
            'product_categories.create',
            'product_categories.update',
            'product_categories.delete',
            'products.view',
            'products.create',
            'products.update',
            'products.delete',
            'product_variants.view',
            'product_variants.create',
            'product_variants.update',
            'product_modifiers.view',
            'product_modifiers.create',
            'product_modifiers.update',
            'product_bundles.view',
            'product_bundles.create',
            'product_bundles.update',
        ]);

        $adminOutlet->syncPermissions([
            'users.view',
            'outlets.view',
            'outlet_settings.view',
            'outlet_settings.update',
            'product_categories.view',
            'products.view',
            'products.create',
            'products.update',
            'product_variants.view',
            'product_variants.create',
            'product_variants.update',
            'product_modifiers.view',
            'product_modifiers.create',
            'product_modifiers.update',
            'product_bundles.view',
            'product_bundles.create',
            'product_bundles.update',
        ]);

        $owner->syncPermissions([
            'users.view',
            'roles.view',
            'permissions.view',
            'outlets.view',
            'outlet_settings.view',
            'system_settings.view',
            'product_categories.view',
            'products.view',
            'product_variants.view',
            'product_modifiers.view',
            'product_bundles.view',
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
- SHA: `57e28c4473ce`  
- Ukuran: 4 KB  
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
| GET | `/outlets` | `OutletController` | `index` |
| POST | `/outlets` | `OutletController` | `store` |
| GET | `/outlets/{outlet}` | `OutletController` | `show` |
| PUT | `/outlets/{outlet}` | `OutletController` | `update` |
| DELETE | `/outlets/{outlet}` | `OutletController` | `destroy` |
| GET | `/outlets/{outlet}/settings` | `OutletSettingController` | `show` |
| PATCH | `/outlets/{outlet}/settings` | `OutletSettingController` | `update` |
| GET | `/system-settings` | `SystemSettingController` | `index` |
| PUT | `/system-settings` | `SystemSettingController` | `upsert` |
| GET | `/product-categories` | `ProductCategoryController` | `index` |
| POST | `/product-categories` | `ProductCategoryController` | `store` |
| GET | `/product-categories/{productCategory}` | `ProductCategoryController` | `show` |
| PUT | `/product-categories/{productCategory}` | `ProductCategoryController` | `update` |
| DELETE | `/product-categories/{productCategory}` | `ProductCategoryController` | `destroy` |
| GET | `/products` | `ProductController` | `index` |
| POST | `/products` | `ProductController` | `store` |
| GET | `/products/{product}` | `ProductController` | `show` |
| PUT | `/products/{product}` | `ProductController` | `update` |
| DELETE | `/products/{product}` | `ProductController` | `destroy` |
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\OutletController;
use App\Http\Controllers\Api\OutletSettingController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\SystemSettingController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\ProductController;

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

        Route::get('/outlets', [OutletController::class, 'index']);
        Route::post('/outlets', [OutletController::class, 'store']);
        Route::get('/outlets/{outlet}', [OutletController::class, 'show']);
        Route::put('/outlets/{outlet}', [OutletController::class, 'update']);
        Route::delete('/outlets/{outlet}', [OutletController::class, 'destroy']);

        Route::get('/outlets/{outlet}/settings', [OutletSettingController::class, 'show']);
        Route::patch('/outlets/{outlet}/settings', [OutletSettingController::class, 'update']);

        Route::get('/system-settings', [SystemSettingController::class, 'index']);
        Route::put('/system-settings', [SystemSettingController::class, 'upsert']);

        Route::get('/product-categories', [ProductCategoryController::class, 'index']);
        Route::post('/product-categories', [ProductCategoryController::class, 'store']);
        Route::get('/product-categories/{productCategory}', [ProductCategoryController::class, 'show']);
        Route::put('/product-categories/{productCategory}', [ProductCategoryController::class, 'update']);
        Route::delete('/product-categories/{productCategory}', [ProductCategoryController::class, 'destroy']);

        Route::get('/products', [ProductController::class, 'index']);
        Route::post('/products', [ProductController::class, 'store']);
        Route::get('/products/{product}', [ProductController::class, 'show']);
        Route::put('/products/{product}', [ProductController::class, 'update']);
        Route::delete('/products/{product}', [ProductController::class, 'destroy']);
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
