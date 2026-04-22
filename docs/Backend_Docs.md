# Dokumentasi Backend (FULL Source)

_Dihasilkan otomatis: 2026-04-22 18:28:35_  
**Root:** `G:\.galuh\latihanlaravel\A-Portfolio-Project\2026\alibaba\backend`

## Daftar Isi
- [Controllers (app/Http/Controllers)](#controllers-app-http-controllers)
  - [app\Http\Controllers\Api\AuthController.php](#file-apphttpcontrollersapiauthcontrollerphp)
  - [app\Http\Controllers\Api\CustomerController.php](#file-apphttpcontrollersapicustomercontrollerphp)
  - [app\Http\Controllers\Api\GoodsReceiptController.php](#file-apphttpcontrollersapigoodsreceiptcontrollerphp)
  - [app\Http\Controllers\Api\OutletController.php](#file-apphttpcontrollersapioutletcontrollerphp)
  - [app\Http\Controllers\Api\OutletMaterialStockController.php](#file-apphttpcontrollersapioutletmaterialstockcontrollerphp)
  - [app\Http\Controllers\Api\OutletSettingController.php](#file-apphttpcontrollersapioutletsettingcontrollerphp)
  - [app\Http\Controllers\Api\PermissionController.php](#file-apphttpcontrollersapipermissioncontrollerphp)
  - [app\Http\Controllers\Api\ProductBomController.php](#file-apphttpcontrollersapiproductbomcontrollerphp)
  - [app\Http\Controllers\Api\ProductCategoryController.php](#file-apphttpcontrollersapiproductcategorycontrollerphp)
  - [app\Http\Controllers\Api\ProductController.php](#file-apphttpcontrollersapiproductcontrollerphp)
  - [app\Http\Controllers\Api\PromotionController.php](#file-apphttpcontrollersapipromotioncontrollerphp)
  - [app\Http\Controllers\Api\PurchaseOrderController.php](#file-apphttpcontrollersapipurchaseordercontrollerphp)
  - [app\Http\Controllers\Api\RawMaterialCategoryController.php](#file-apphttpcontrollersapirawmaterialcategorycontrollerphp)
  - [app\Http\Controllers\Api\RawMaterialController.php](#file-apphttpcontrollersapirawmaterialcontrollerphp)
  - [app\Http\Controllers\Api\RoleController.php](#file-apphttpcontrollersapirolecontrollerphp)
  - [app\Http\Controllers\Api\SupplierController.php](#file-apphttpcontrollersapisuppliercontrollerphp)
  - [app\Http\Controllers\Api\SystemSettingController.php](#file-apphttpcontrollersapisystemsettingcontrollerphp)
  - [app\Http\Controllers\Api\UnitController.php](#file-apphttpcontrollersapiunitcontrollerphp)
  - [app\Http\Controllers\Api\UnitConversionController.php](#file-apphttpcontrollersapiunitconversioncontrollerphp)
  - [app\Http\Controllers\Api\UserController.php](#file-apphttpcontrollersapiusercontrollerphp)
  - [app\Http\Controllers\Api\VoucherController.php](#file-apphttpcontrollersapivouchercontrollerphp)
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
  - [app\Http\Requests\Api\Customer\StoreCustomerRequest.php](#file-apphttprequestsapicustomerstorecustomerrequestphp)
  - [app\Http\Requests\Api\Customer\UpdateCustomerRequest.php](#file-apphttprequestsapicustomerupdatecustomerrequestphp)
  - [app\Http\Requests\Api\Inventory\OutletMaterialStock\UpsertOutletMaterialStockRequest.php](#file-apphttprequestsapiinventoryoutletmaterialstockupsertoutletmaterialstockrequestphp)
  - [app\Http\Requests\Api\Inventory\ProductBom\StoreProductBomRequest.php](#file-apphttprequestsapiinventoryproductbomstoreproductbomrequestphp)
  - [app\Http\Requests\Api\Inventory\ProductBom\UpdateProductBomRequest.php](#file-apphttprequestsapiinventoryproductbomupdateproductbomrequestphp)
  - [app\Http\Requests\Api\Inventory\RawMaterial\StoreRawMaterialRequest.php](#file-apphttprequestsapiinventoryrawmaterialstorerawmaterialrequestphp)
  - [app\Http\Requests\Api\Inventory\RawMaterial\UpdateRawMaterialRequest.php](#file-apphttprequestsapiinventoryrawmaterialupdaterawmaterialrequestphp)
  - [app\Http\Requests\Api\Inventory\RawMaterialCategory\StoreRawMaterialCategoryRequest.php](#file-apphttprequestsapiinventoryrawmaterialcategorystorerawmaterialcategoryrequestphp)
  - [app\Http\Requests\Api\Inventory\RawMaterialCategory\UpdateRawMaterialCategoryRequest.php](#file-apphttprequestsapiinventoryrawmaterialcategoryupdaterawmaterialcategoryrequestphp)
  - [app\Http\Requests\Api\Inventory\Unit\StoreUnitRequest.php](#file-apphttprequestsapiinventoryunitstoreunitrequestphp)
  - [app\Http\Requests\Api\Inventory\Unit\UpdateUnitRequest.php](#file-apphttprequestsapiinventoryunitupdateunitrequestphp)
  - [app\Http\Requests\Api\Inventory\UnitConversion\StoreUnitConversionRequest.php](#file-apphttprequestsapiinventoryunitconversionstoreunitconversionrequestphp)
  - [app\Http\Requests\Api\Inventory\UnitConversion\UpdateUnitConversionRequest.php](#file-apphttprequestsapiinventoryunitconversionupdateunitconversionrequestphp)
  - [app\Http\Requests\Api\Outlet\StoreOutletRequest.php](#file-apphttprequestsapioutletstoreoutletrequestphp)
  - [app\Http\Requests\Api\Outlet\UpdateOutletRequest.php](#file-apphttprequestsapioutletupdateoutletrequestphp)
  - [app\Http\Requests\Api\Outlet\UpdateOutletSettingRequest.php](#file-apphttprequestsapioutletupdateoutletsettingrequestphp)
  - [app\Http\Requests\Api\Permission\StorePermissionRequest.php](#file-apphttprequestsapipermissionstorepermissionrequestphp)
  - [app\Http\Requests\Api\Permission\UpdatePermissionRequest.php](#file-apphttprequestsapipermissionupdatepermissionrequestphp)
  - [app\Http\Requests\Api\Product\StoreProductRequest.php](#file-apphttprequestsapiproductstoreproductrequestphp)
  - [app\Http\Requests\Api\Product\UpdateProductRequest.php](#file-apphttprequestsapiproductupdateproductrequestphp)
  - [app\Http\Requests\Api\ProductCategory\StoreProductCategoryRequest.php](#file-apphttprequestsapiproductcategorystoreproductcategoryrequestphp)
  - [app\Http\Requests\Api\ProductCategory\UpdateProductCategoryRequest.php](#file-apphttprequestsapiproductcategoryupdateproductcategoryrequestphp)
  - [app\Http\Requests\Api\Promotion\StorePromotionRequest.php](#file-apphttprequestsapipromotionstorepromotionrequestphp)
  - [app\Http\Requests\Api\Promotion\UpdatePromotionRequest.php](#file-apphttprequestsapipromotionupdatepromotionrequestphp)
  - [app\Http\Requests\Api\Purchasing\GoodsReceipt\PostGoodsReceiptRequest.php](#file-apphttprequestsapipurchasinggoodsreceiptpostgoodsreceiptrequestphp)
  - [app\Http\Requests\Api\Purchasing\GoodsReceipt\StoreGoodsReceiptRequest.php](#file-apphttprequestsapipurchasinggoodsreceiptstoregoodsreceiptrequestphp)
  - [app\Http\Requests\Api\Purchasing\GoodsReceipt\UpdateGoodsReceiptRequest.php](#file-apphttprequestsapipurchasinggoodsreceiptupdategoodsreceiptrequestphp)
  - [app\Http\Requests\Api\Purchasing\PurchaseOrder\StorePurchaseOrderRequest.php](#file-apphttprequestsapipurchasingpurchaseorderstorepurchaseorderrequestphp)
  - [app\Http\Requests\Api\Purchasing\PurchaseOrder\UpdatePurchaseOrderRequest.php](#file-apphttprequestsapipurchasingpurchaseorderupdatepurchaseorderrequestphp)
  - [app\Http\Requests\Api\Purchasing\Supplier\StoreSupplierRequest.php](#file-apphttprequestsapipurchasingsupplierstoresupplierrequestphp)
  - [app\Http\Requests\Api\Purchasing\Supplier\UpdateSupplierRequest.php](#file-apphttprequestsapipurchasingsupplierupdatesupplierrequestphp)
  - [app\Http\Requests\Api\Role\StoreRoleRequest.php](#file-apphttprequestsapirolestorerolerequestphp)
  - [app\Http\Requests\Api\Role\UpdateRoleRequest.php](#file-apphttprequestsapiroleupdaterolerequestphp)
  - [app\Http\Requests\Api\SystemSetting\UpsertSystemSettingRequest.php](#file-apphttprequestsapisystemsettingupsertsystemsettingrequestphp)
  - [app\Http\Requests\Api\User\StoreUserRequest.php](#file-apphttprequestsapiuserstoreuserrequestphp)
  - [app\Http\Requests\Api\User\UpdateUserRequest.php](#file-apphttprequestsapiuserupdateuserrequestphp)
  - [app\Http\Requests\Api\Voucher\StoreVoucherRequest.php](#file-apphttprequestsapivoucherstorevoucherrequestphp)
  - [app\Http\Requests\Api\Voucher\UpdateVoucherRequest.php](#file-apphttprequestsapivoucherupdatevoucherrequestphp)
- [API Resources (app/Http/Resources)](#api-resources-app-http-resources)
  - [app\Http\Resources\CustomerAddressResource.php](#file-apphttpresourcescustomeraddressresourcephp)
  - [app\Http\Resources\CustomerResource.php](#file-apphttpresourcescustomerresourcephp)
  - [app\Http\Resources\GoodsReceiptItemResource.php](#file-apphttpresourcesgoodsreceiptitemresourcephp)
  - [app\Http\Resources\GoodsReceiptResource.php](#file-apphttpresourcesgoodsreceiptresourcephp)
  - [app\Http\Resources\OutletMaterialStockResource.php](#file-apphttpresourcesoutletmaterialstockresourcephp)
  - [app\Http\Resources\OutletResource.php](#file-apphttpresourcesoutletresourcephp)
  - [app\Http\Resources\OutletSettingResource.php](#file-apphttpresourcesoutletsettingresourcephp)
  - [app\Http\Resources\PermissionResource.php](#file-apphttpresourcespermissionresourcephp)
  - [app\Http\Resources\ProductBomItemResource.php](#file-apphttpresourcesproductbomitemresourcephp)
  - [app\Http\Resources\ProductBomResource.php](#file-apphttpresourcesproductbomresourcephp)
  - [app\Http\Resources\ProductBundleItemResource.php](#file-apphttpresourcesproductbundleitemresourcephp)
  - [app\Http\Resources\ProductCategoryResource.php](#file-apphttpresourcesproductcategoryresourcephp)
  - [app\Http\Resources\ProductModifierGroupResource.php](#file-apphttpresourcesproductmodifiergroupresourcephp)
  - [app\Http\Resources\ProductModifierOptionResource.php](#file-apphttpresourcesproductmodifieroptionresourcephp)
  - [app\Http\Resources\ProductOutletStatusResource.php](#file-apphttpresourcesproductoutletstatusresourcephp)
  - [app\Http\Resources\ProductPriceResource.php](#file-apphttpresourcesproductpriceresourcephp)
  - [app\Http\Resources\ProductResource.php](#file-apphttpresourcesproductresourcephp)
  - [app\Http\Resources\ProductVariantGroupResource.php](#file-apphttpresourcesproductvariantgroupresourcephp)
  - [app\Http\Resources\ProductVariantOptionResource.php](#file-apphttpresourcesproductvariantoptionresourcephp)
  - [app\Http\Resources\PromotionResource.php](#file-apphttpresourcespromotionresourcephp)
  - [app\Http\Resources\PromotionRuleResource.php](#file-apphttpresourcespromotionruleresourcephp)
  - [app\Http\Resources\PurchaseOrderItemResource.php](#file-apphttpresourcespurchaseorderitemresourcephp)
  - [app\Http\Resources\PurchaseOrderResource.php](#file-apphttpresourcespurchaseorderresourcephp)
  - [app\Http\Resources\RawMaterialCategoryResource.php](#file-apphttpresourcesrawmaterialcategoryresourcephp)
  - [app\Http\Resources\RawMaterialResource.php](#file-apphttpresourcesrawmaterialresourcephp)
  - [app\Http\Resources\RoleResource.php](#file-apphttpresourcesroleresourcephp)
  - [app\Http\Resources\SupplierResource.php](#file-apphttpresourcessupplierresourcephp)
  - [app\Http\Resources\SystemSettingResource.php](#file-apphttpresourcessystemsettingresourcephp)
  - [app\Http\Resources\UnitConversionResource.php](#file-apphttpresourcesunitconversionresourcephp)
  - [app\Http\Resources\UnitResource.php](#file-apphttpresourcesunitresourcephp)
  - [app\Http\Resources\UserResource.php](#file-apphttpresourcesuserresourcephp)
  - [app\Http\Resources\VoucherResource.php](#file-apphttpresourcesvoucherresourcephp)
- [Models (app/Models)](#models-app-models)
  - [app\Models\Customer.php](#file-appmodelscustomerphp)
  - [app\Models\CustomerAddress.php](#file-appmodelscustomeraddressphp)
  - [app\Models\GoodsReceipt.php](#file-appmodelsgoodsreceiptphp)
  - [app\Models\GoodsReceiptItem.php](#file-appmodelsgoodsreceiptitemphp)
  - [app\Models\Outlet.php](#file-appmodelsoutletphp)
  - [app\Models\OutletMaterialStock.php](#file-appmodelsoutletmaterialstockphp)
  - [app\Models\OutletSetting.php](#file-appmodelsoutletsettingphp)
  - [app\Models\Product.php](#file-appmodelsproductphp)
  - [app\Models\ProductBom.php](#file-appmodelsproductbomphp)
  - [app\Models\ProductBomItem.php](#file-appmodelsproductbomitemphp)
  - [app\Models\ProductBundleItem.php](#file-appmodelsproductbundleitemphp)
  - [app\Models\ProductCategory.php](#file-appmodelsproductcategoryphp)
  - [app\Models\ProductModifierGroup.php](#file-appmodelsproductmodifiergroupphp)
  - [app\Models\ProductModifierOption.php](#file-appmodelsproductmodifieroptionphp)
  - [app\Models\ProductOutletStatus.php](#file-appmodelsproductoutletstatusphp)
  - [app\Models\ProductPrice.php](#file-appmodelsproductpricephp)
  - [app\Models\ProductVariantGroup.php](#file-appmodelsproductvariantgroupphp)
  - [app\Models\ProductVariantOption.php](#file-appmodelsproductvariantoptionphp)
  - [app\Models\Promotion.php](#file-appmodelspromotionphp)
  - [app\Models\PromotionRule.php](#file-appmodelspromotionrulephp)
  - [app\Models\PurchaseOrder.php](#file-appmodelspurchaseorderphp)
  - [app\Models\PurchaseOrderItem.php](#file-appmodelspurchaseorderitemphp)
  - [app\Models\RawMaterial.php](#file-appmodelsrawmaterialphp)
  - [app\Models\RawMaterialCategory.php](#file-appmodelsrawmaterialcategoryphp)
  - [app\Models\StockMovement.php](#file-appmodelsstockmovementphp)
  - [app\Models\StockMovementItem.php](#file-appmodelsstockmovementitemphp)
  - [app\Models\Supplier.php](#file-appmodelssupplierphp)
  - [app\Models\SystemSetting.php](#file-appmodelssystemsettingphp)
  - [app\Models\Unit.php](#file-appmodelsunitphp)
  - [app\Models\UnitConversion.php](#file-appmodelsunitconversionphp)
  - [app\Models\User.php](#file-appmodelsuserphp)
  - [app\Models\UserOutletAccess.php](#file-appmodelsuseroutletaccessphp)
  - [app\Models\Voucher.php](#file-appmodelsvoucherphp)
- [Providers (app/Providers)](#providers-app-providers)
  - [app\Providers\AppServiceProvider.php](#file-appprovidersappserviceproviderphp)
- [Services (app/Services)](#services-app-services)
  - [app\Services\Auth\AuthService.php](#file-appservicesauthauthservicephp)
  - [app\Services\Catalog\ProductService.php](#file-appservicescatalogproductservicephp)
  - [app\Services\Customer\CustomerService.php](#file-appservicescustomercustomerservicephp)
  - [app\Services\Inventory\OutletMaterialStockService.php](#file-appservicesinventoryoutletmaterialstockservicephp)
  - [app\Services\Inventory\ProductBomService.php](#file-appservicesinventoryproductbomservicephp)
  - [app\Services\Inventory\RawMaterialService.php](#file-appservicesinventoryrawmaterialservicephp)
  - [app\Services\Inventory\UnitConversionService.php](#file-appservicesinventoryunitconversionservicephp)
  - [app\Services\Inventory\UnitService.php](#file-appservicesinventoryunitservicephp)
  - [app\Services\Outlet\OutletService.php](#file-appservicesoutletoutletservicephp)
  - [app\Services\Promotion\PromotionService.php](#file-appservicespromotionpromotionservicephp)
  - [app\Services\Purchasing\GoodsReceiptService.php](#file-appservicespurchasinggoodsreceiptservicephp)
  - [app\Services\Purchasing\PurchaseOrderService.php](#file-appservicespurchasingpurchaseorderservicephp)
  - [app\Services\Purchasing\SupplierService.php](#file-appservicespurchasingsupplierservicephp)
  - [app\Services\SystemSetting\SystemSettingService.php](#file-appservicessystemsettingsystemsettingservicephp)
  - [app\Services\User\UserService.php](#file-appservicesuseruserservicephp)
  - [app\Services\Voucher\VoucherService.php](#file-appservicesvouchervoucherservicephp)
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

<a id="file-apphttpcontrollersapicustomercontrollerphp"></a>
### app\Http\Controllers\Api\CustomerController.php
- SHA: `0041df4b4e21`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `CustomerController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly CustomerService $customerService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreCustomerRequest $request) : *JsonResponse*
- **show**(Request $request, Customer $customer) : *JsonResponse*
- **update**(UpdateCustomerRequest $request, Customer $customer) : *JsonResponse*
- **destroy**(Request $request, Customer $customer) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Customer\StoreCustomerRequest;
use App\Http\Requests\Api\Customer\UpdateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use App\Services\Customer\CustomerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct(
        private readonly CustomerService $customerService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('customers.view'), 403);

        $customers = Customer::query()
            ->with('addresses')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_member'), function ($query) use ($request) {
                $query->where('is_member', filter_var($request->input('is_member'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar customer berhasil diambil.',
            'data' => CustomerResource::collection($customers),
            'meta' => [
                'current_page' => $customers->currentPage(),
                'last_page' => $customers->lastPage(),
                'per_page' => $customers->perPage(),
                'total' => $customers->total(),
            ],
        ]);
    }

    public function store(StoreCustomerRequest $request): JsonResponse
    {
        $customer = $this->customerService->create($request->validated());

        return response()->json([
            'message' => 'Customer berhasil dibuat.',
            'data' => new CustomerResource($customer),
        ], 201);
    }

    public function show(Request $request, Customer $customer): JsonResponse
    {
        abort_unless($request->user()->can('customers.view'), 403);

        return response()->json([
            'message' => 'Detail customer berhasil diambil.',
            'data' => new CustomerResource($customer->load('addresses')),
        ]);
    }

    public function update(UpdateCustomerRequest $request, Customer $customer): JsonResponse
    {
        $customer = $this->customerService->update($customer, $request->validated());

        return response()->json([
            'message' => 'Customer berhasil diupdate.',
            'data' => new CustomerResource($customer),
        ]);
    }

    public function destroy(Request $request, Customer $customer): JsonResponse
    {
        abort_unless($request->user()->can('customers.delete'), 403);

        $customer->delete();

        return response()->json([
            'message' => 'Customer berhasil dihapus.',
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapigoodsreceiptcontrollerphp"></a>
### app\Http\Controllers\Api\GoodsReceiptController.php
- SHA: `b307732ff28a`  
- Ukuran: 5 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `GoodsReceiptController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly GoodsReceiptService $goodsReceiptService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreGoodsReceiptRequest $request) : *JsonResponse*
- **show**(Request $request, GoodsReceipt $goodsReceipt) : *JsonResponse*
- **update**(UpdateGoodsReceiptRequest $request, GoodsReceipt $goodsReceipt) : *JsonResponse*
- **post**(PostGoodsReceiptRequest $request, GoodsReceipt $goodsReceipt) : *JsonResponse*
- **cancel**(Request $request, GoodsReceipt $goodsReceipt) : *JsonResponse*
- **destroy**(Request $request, GoodsReceipt $goodsReceipt) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Purchasing\GoodsReceipt\PostGoodsReceiptRequest;
use App\Http\Requests\Api\Purchasing\GoodsReceipt\StoreGoodsReceiptRequest;
use App\Http\Requests\Api\Purchasing\GoodsReceipt\UpdateGoodsReceiptRequest;
use App\Http\Resources\GoodsReceiptResource;
use App\Models\GoodsReceipt;
use App\Services\Purchasing\GoodsReceiptService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GoodsReceiptController extends Controller
{
    public function __construct(
        private readonly GoodsReceiptService $goodsReceiptService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.view'), 403);

        $rows = GoodsReceipt::query()
            ->with([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('receipt_number', 'like', "%{$search}%")
                        ->orWhereHas('purchaseOrder', fn ($pq) => $pq->where('po_number', 'like', "%{$search}%"));
                });
            })
            ->when($request->filled('purchase_order_id'), function ($query) use ($request) {
                $query->where('purchase_order_id', (int) $request->input('purchase_order_id'));
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar goods receipt berhasil diambil.',
            'data' => GoodsReceiptResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreGoodsReceiptRequest $request): JsonResponse
    {
        $row = $this->goodsReceiptService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Goods receipt berhasil dibuat.',
            'data' => new GoodsReceiptResource($row),
        ], 201);
    }

    public function show(Request $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.view'), 403);

        return response()->json([
            'message' => 'Detail goods receipt berhasil diambil.',
            'data' => new GoodsReceiptResource($goodsReceipt->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ])),
        ]);
    }

    public function update(UpdateGoodsReceiptRequest $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        $row = $this->goodsReceiptService->update($goodsReceipt, $request->validated());

        return response()->json([
            'message' => 'Goods receipt berhasil diupdate.',
            'data' => new GoodsReceiptResource($row),
        ]);
    }

    public function post(PostGoodsReceiptRequest $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        $row = $this->goodsReceiptService->post($goodsReceipt, $request->user()->id);

        return response()->json([
            'message' => 'Goods receipt berhasil dipost.',
            'data' => new GoodsReceiptResource($row),
        ]);
    }

    public function cancel(Request $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.cancel'), 403);

        $row = $this->goodsReceiptService->cancel($goodsReceipt);

        return response()->json([
            'message' => 'Goods receipt berhasil dibatalkan.',
            'data' => new GoodsReceiptResource($row),
        ]);
    }

    public function destroy(Request $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.delete'), 403);

        if ($goodsReceipt->status !== 'draft') {
            return response()->json([
                'message' => 'Hanya goods receipt draft yang boleh dihapus.',
            ], 422);
        }

        $goodsReceipt->delete();

        return response()->json([
            'message' => 'Goods receipt berhasil dihapus.',
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

<a id="file-apphttpcontrollersapioutletmaterialstockcontrollerphp"></a>
### app\Http\Controllers\Api\OutletMaterialStockController.php
- SHA: `cdad9c78027a`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `OutletMaterialStockController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly OutletMaterialStockService $outletMaterialStockService)
- **index**(Request $request) : *JsonResponse*
- **upsert**(UpsertOutletMaterialStockRequest $request) : *JsonResponse*
- **show**(Request $request, OutletMaterialStock $outletMaterialStock) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\OutletMaterialStock\UpsertOutletMaterialStockRequest;
use App\Http\Resources\OutletMaterialStockResource;
use App\Models\OutletMaterialStock;
use App\Services\Inventory\OutletMaterialStockService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OutletMaterialStockController extends Controller
{
    public function __construct(
        private readonly OutletMaterialStockService $outletMaterialStockService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('outlet_material_stocks.view'), 403);

        $rows = OutletMaterialStock::query()
            ->with(['outlet', 'rawMaterial'])
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('raw_material_id'), function ($query) use ($request) {
                $query->where('raw_material_id', (int) $request->input('raw_material_id'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar stok bahan per outlet berhasil diambil.',
            'data' => OutletMaterialStockResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function upsert(UpsertOutletMaterialStockRequest $request): JsonResponse
    {
        $row = $this->outletMaterialStockService->upsert($request->validated());

        return response()->json([
            'message' => 'Stok bahan outlet berhasil disimpan.',
            'data' => new OutletMaterialStockResource($row),
        ]);
    }

    public function show(Request $request, OutletMaterialStock $outletMaterialStock): JsonResponse
    {
        abort_unless($request->user()->can('outlet_material_stocks.view'), 403);

        return response()->json([
            'message' => 'Detail stok bahan outlet berhasil diambil.',
            'data' => new OutletMaterialStockResource($outletMaterialStock->load(['outlet', 'rawMaterial'])),
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

<a id="file-apphttpcontrollersapiproductbomcontrollerphp"></a>
### app\Http\Controllers\Api\ProductBomController.php
- SHA: `d3328e84ea76`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `ProductBomController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly ProductBomService $productBomService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreProductBomRequest $request) : *JsonResponse*
- **show**(Request $request, ProductBom $productBom) : *JsonResponse*
- **update**(UpdateProductBomRequest $request, ProductBom $productBom) : *JsonResponse*
- **destroy**(Request $request, ProductBom $productBom) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\ProductBom\StoreProductBomRequest;
use App\Http\Requests\Api\Inventory\ProductBom\UpdateProductBomRequest;
use App\Http\Resources\ProductBomResource;
use App\Models\ProductBom;
use App\Services\Inventory\ProductBomService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductBomController extends Controller
{
    public function __construct(
        private readonly ProductBomService $productBomService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('product_boms.view'), 403);

        $rows = ProductBom::query()
            ->with(['product', 'items.rawMaterial', 'items.unit'])
            ->when($request->filled('product_id'), function ($query) use ($request) {
                $query->where('product_id', (int) $request->input('product_id'));
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->orderByDesc('version')
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar BOM berhasil diambil.',
            'data' => ProductBomResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreProductBomRequest $request): JsonResponse
    {
        $row = $this->productBomService->create($request->validated());

        return response()->json([
            'message' => 'BOM berhasil dibuat.',
            'data' => new ProductBomResource($row),
        ], 201);
    }

    public function show(Request $request, ProductBom $productBom): JsonResponse
    {
        abort_unless($request->user()->can('product_boms.view'), 403);

        return response()->json([
            'message' => 'Detail BOM berhasil diambil.',
            'data' => new ProductBomResource($productBom->load(['product', 'items.rawMaterial', 'items.unit'])),
        ]);
    }

    public function update(UpdateProductBomRequest $request, ProductBom $productBom): JsonResponse
    {
        $row = $this->productBomService->update($productBom, $request->validated());

        return response()->json([
            'message' => 'BOM berhasil diupdate.',
            'data' => new ProductBomResource($row),
        ]);
    }

    public function destroy(Request $request, ProductBom $productBom): JsonResponse
    {
        abort_unless($request->user()->can('product_boms.delete'), 403);

        $productBom->delete();

        return response()->json([
            'message' => 'BOM berhasil dihapus.',
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
- SHA: `00cbdfa6c312`  
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

<a id="file-apphttpcontrollersapipromotioncontrollerphp"></a>
### app\Http\Controllers\Api\PromotionController.php
- SHA: `3c349b2d6fa9`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `PromotionController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly PromotionService $promotionService)
- **index**(Request $request) : *JsonResponse*
- **store**(StorePromotionRequest $request) : *JsonResponse*
- **show**(Request $request, Promotion $promotion) : *JsonResponse*
- **update**(UpdatePromotionRequest $request, Promotion $promotion) : *JsonResponse*
- **destroy**(Request $request, Promotion $promotion) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Promotion\StorePromotionRequest;
use App\Http\Requests\Api\Promotion\UpdatePromotionRequest;
use App\Http\Resources\PromotionResource;
use App\Models\Promotion;
use App\Services\Promotion\PromotionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function __construct(
        private readonly PromotionService $promotionService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('promotions.view'), 403);

        $promotions = Promotion::query()
            ->with('rules')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where('name', 'like', "%{$search}%");
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->when($request->filled('promotion_type'), function ($query) use ($request) {
                $query->where('promotion_type', $request->string('promotion_type')->toString());
            })
            ->orderByDesc('priority')
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar promotion berhasil diambil.',
            'data' => PromotionResource::collection($promotions),
            'meta' => [
                'current_page' => $promotions->currentPage(),
                'last_page' => $promotions->lastPage(),
                'per_page' => $promotions->perPage(),
                'total' => $promotions->total(),
            ],
        ]);
    }

    public function store(StorePromotionRequest $request): JsonResponse
    {
        $promotion = $this->promotionService->create($request->validated());

        return response()->json([
            'message' => 'Promotion berhasil dibuat.',
            'data' => new PromotionResource($promotion),
        ], 201);
    }

    public function show(Request $request, Promotion $promotion): JsonResponse
    {
        abort_unless($request->user()->can('promotions.view'), 403);

        return response()->json([
            'message' => 'Detail promotion berhasil diambil.',
            'data' => new PromotionResource($promotion->load('rules')),
        ]);
    }

    public function update(UpdatePromotionRequest $request, Promotion $promotion): JsonResponse
    {
        $promotion = $this->promotionService->update($promotion, $request->validated());

        return response()->json([
            'message' => 'Promotion berhasil diupdate.',
            'data' => new PromotionResource($promotion),
        ]);
    }

    public function destroy(Request $request, Promotion $promotion): JsonResponse
    {
        abort_unless($request->user()->can('promotions.delete'), 403);

        $promotion->delete();

        return response()->json([
            'message' => 'Promotion berhasil dihapus.',
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapipurchaseordercontrollerphp"></a>
### app\Http\Controllers\Api\PurchaseOrderController.php
- SHA: `ae31ac2584d6`  
- Ukuran: 5 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `PurchaseOrderController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly PurchaseOrderService $purchaseOrderService)
- **index**(Request $request) : *JsonResponse*
- **store**(StorePurchaseOrderRequest $request) : *JsonResponse*
- **show**(Request $request, PurchaseOrder $purchaseOrder) : *JsonResponse*
- **update**(UpdatePurchaseOrderRequest $request, PurchaseOrder $purchaseOrder) : *JsonResponse*
- **approve**(Request $request, PurchaseOrder $purchaseOrder) : *JsonResponse*
- **cancel**(Request $request, PurchaseOrder $purchaseOrder) : *JsonResponse*
- **destroy**(Request $request, PurchaseOrder $purchaseOrder) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Purchasing\PurchaseOrder\StorePurchaseOrderRequest;
use App\Http\Requests\Api\Purchasing\PurchaseOrder\UpdatePurchaseOrderRequest;
use App\Http\Resources\PurchaseOrderResource;
use App\Models\PurchaseOrder;
use App\Services\Purchasing\PurchaseOrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function __construct(
        private readonly PurchaseOrderService $purchaseOrderService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.view'), 403);

        $rows = PurchaseOrder::query()
            ->with([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ])
            ->withCount('goodsReceipts')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('po_number', 'like', "%{$search}%")
                        ->orWhereHas('supplier', fn ($sq) => $sq->where('name', 'like', "%{$search}%"))
                        ->orWhereHas('outlet', fn ($oq) => $oq->where('name', 'like', "%{$search}%"));
                });
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('supplier_id'), function ($query) use ($request) {
                $query->where('supplier_id', (int) $request->input('supplier_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar purchase order berhasil diambil.',
            'data' => PurchaseOrderResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StorePurchaseOrderRequest $request): JsonResponse
    {
        $row = $this->purchaseOrderService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Purchase order berhasil dibuat.',
            'data' => new PurchaseOrderResource($row),
        ], 201);
    }

    public function show(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.view'), 403);

        return response()->json([
            'message' => 'Detail purchase order berhasil diambil.',
            'data' => new PurchaseOrderResource($purchaseOrder->load([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ])->loadCount('goodsReceipts')),
        ]);
    }

    public function update(UpdatePurchaseOrderRequest $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        $row = $this->purchaseOrderService->update($purchaseOrder, $request->validated());

        return response()->json([
            'message' => 'Purchase order berhasil diupdate.',
            'data' => new PurchaseOrderResource($row),
        ]);
    }

    public function approve(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.approve'), 403);

        $row = $this->purchaseOrderService->approve($purchaseOrder, $request->user()->id);

        return response()->json([
            'message' => 'Purchase order berhasil di-approve.',
            'data' => new PurchaseOrderResource($row),
        ]);
    }

    public function cancel(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.cancel'), 403);

        $row = $this->purchaseOrderService->cancel($purchaseOrder);

        return response()->json([
            'message' => 'Purchase order berhasil dibatalkan.',
            'data' => new PurchaseOrderResource($row),
        ]);
    }

    public function destroy(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.delete'), 403);

        if ($purchaseOrder->goodsReceipts()->exists()) {
            return response()->json([
                'message' => 'Purchase order tidak bisa dihapus karena sudah memiliki goods receipt.',
            ], 422);
        }

        if ($purchaseOrder->status !== 'draft') {
            return response()->json([
                'message' => 'Hanya purchase order draft yang boleh dihapus.',
            ], 422);
        }

        $purchaseOrder->delete();

        return response()->json([
            'message' => 'Purchase order berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapirawmaterialcategorycontrollerphp"></a>
### app\Http\Controllers\Api\RawMaterialCategoryController.php
- SHA: `a35bbe55eac8`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `RawMaterialCategoryController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **store**(StoreRawMaterialCategoryRequest $request) : *JsonResponse*
- **show**(Request $request, RawMaterialCategory $rawMaterialCategory) : *JsonResponse*
- **update**(UpdateRawMaterialCategoryRequest $request, RawMaterialCategory $rawMaterialCategory) : *JsonResponse*
- **destroy**(Request $request, RawMaterialCategory $rawMaterialCategory) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\RawMaterialCategory\StoreRawMaterialCategoryRequest;
use App\Http\Requests\Api\Inventory\RawMaterialCategory\UpdateRawMaterialCategoryRequest;
use App\Http\Resources\RawMaterialCategoryResource;
use App\Models\RawMaterialCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RawMaterialCategoryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('raw_material_categories.view'), 403);

        $rows = RawMaterialCategory::query()
            ->withCount('rawMaterials')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();
                $query->where('name', 'like', "%{$search}%");
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar kategori bahan baku berhasil diambil.',
            'data' => RawMaterialCategoryResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreRawMaterialCategoryRequest $request): JsonResponse
    {
        $row = RawMaterialCategory::create($request->validated());

        return response()->json([
            'message' => 'Kategori bahan baku berhasil dibuat.',
            'data' => new RawMaterialCategoryResource($row),
        ], 201);
    }

    public function show(Request $request, RawMaterialCategory $rawMaterialCategory): JsonResponse
    {
        abort_unless($request->user()->can('raw_material_categories.view'), 403);

        return response()->json([
            'message' => 'Detail kategori bahan baku berhasil diambil.',
            'data' => new RawMaterialCategoryResource($rawMaterialCategory->loadCount('rawMaterials')),
        ]);
    }

    public function update(UpdateRawMaterialCategoryRequest $request, RawMaterialCategory $rawMaterialCategory): JsonResponse
    {
        $rawMaterialCategory->update($request->validated());

        return response()->json([
            'message' => 'Kategori bahan baku berhasil diupdate.',
            'data' => new RawMaterialCategoryResource($rawMaterialCategory->fresh()->loadCount('rawMaterials')),
        ]);
    }

    public function destroy(Request $request, RawMaterialCategory $rawMaterialCategory): JsonResponse
    {
        abort_unless($request->user()->can('raw_material_categories.delete'), 403);

        if ($rawMaterialCategory->rawMaterials()->exists()) {
            return response()->json([
                'message' => 'Kategori bahan baku tidak bisa dihapus karena masih dipakai.',
            ], 422);
        }

        $rawMaterialCategory->delete();

        return response()->json([
            'message' => 'Kategori bahan baku berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapirawmaterialcontrollerphp"></a>
### app\Http\Controllers\Api\RawMaterialController.php
- SHA: `89b3fe24260a`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `RawMaterialController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly RawMaterialService $rawMaterialService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreRawMaterialRequest $request) : *JsonResponse*
- **show**(Request $request, RawMaterial $rawMaterial) : *JsonResponse*
- **update**(UpdateRawMaterialRequest $request, RawMaterial $rawMaterial) : *JsonResponse*
- **destroy**(Request $request, RawMaterial $rawMaterial) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\RawMaterial\StoreRawMaterialRequest;
use App\Http\Requests\Api\Inventory\RawMaterial\UpdateRawMaterialRequest;
use App\Http\Resources\RawMaterialResource;
use App\Models\RawMaterial;
use App\Services\Inventory\RawMaterialService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RawMaterialController extends Controller
{
    public function __construct(
        private readonly RawMaterialService $rawMaterialService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('raw_materials.view'), 403);

        $rows = RawMaterial::query()
            ->with(['category', 'unit', 'outletStocks.outlet'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('code', 'like', "%{$search}%")
                        ->orWhere('sku', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('raw_material_category_id'), function ($query) use ($request) {
                $query->where('raw_material_category_id', (int) $request->input('raw_material_category_id'));
            })
            ->when($request->filled('unit_id'), function ($query) use ($request) {
                $query->where('unit_id', (int) $request->input('unit_id'));
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar bahan baku berhasil diambil.',
            'data' => RawMaterialResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreRawMaterialRequest $request): JsonResponse
    {
        $row = $this->rawMaterialService->create($request->validated());

        return response()->json([
            'message' => 'Bahan baku berhasil dibuat.',
            'data' => new RawMaterialResource($row),
        ], 201);
    }

    public function show(Request $request, RawMaterial $rawMaterial): JsonResponse
    {
        abort_unless($request->user()->can('raw_materials.view'), 403);

        return response()->json([
            'message' => 'Detail bahan baku berhasil diambil.',
            'data' => new RawMaterialResource($rawMaterial->load(['category', 'unit', 'outletStocks.outlet'])),
        ]);
    }

    public function update(UpdateRawMaterialRequest $request, RawMaterial $rawMaterial): JsonResponse
    {
        $row = $this->rawMaterialService->update($rawMaterial, $request->validated());

        return response()->json([
            'message' => 'Bahan baku berhasil diupdate.',
            'data' => new RawMaterialResource($row),
        ]);
    }

    public function destroy(Request $request, RawMaterial $rawMaterial): JsonResponse
    {
        abort_unless($request->user()->can('raw_materials.delete'), 403);

        if ($rawMaterial->bomItems()->exists()) {
            return response()->json([
                'message' => 'Bahan baku tidak bisa dihapus karena sudah dipakai di BOM.',
            ], 422);
        }

        $rawMaterial->delete();

        return response()->json([
            'message' => 'Bahan baku berhasil dihapus.',
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

<a id="file-apphttpcontrollersapisuppliercontrollerphp"></a>
### app\Http\Controllers\Api\SupplierController.php
- SHA: `681f5d0fd36f`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `SupplierController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly SupplierService $supplierService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreSupplierRequest $request) : *JsonResponse*
- **show**(Request $request, Supplier $supplier) : *JsonResponse*
- **update**(UpdateSupplierRequest $request, Supplier $supplier) : *JsonResponse*
- **destroy**(Request $request, Supplier $supplier) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Purchasing\Supplier\StoreSupplierRequest;
use App\Http\Requests\Api\Purchasing\Supplier\UpdateSupplierRequest;
use App\Http\Resources\SupplierResource;
use App\Models\Supplier;
use App\Services\Purchasing\SupplierService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct(
        private readonly SupplierService $supplierService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('suppliers.view'), 403);

        $suppliers = Supplier::query()
            ->withCount('purchaseOrders')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%")
                        ->orWhere('contact_person', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar supplier berhasil diambil.',
            'data' => SupplierResource::collection($suppliers),
            'meta' => [
                'current_page' => $suppliers->currentPage(),
                'last_page' => $suppliers->lastPage(),
                'per_page' => $suppliers->perPage(),
                'total' => $suppliers->total(),
            ],
        ]);
    }

    public function store(StoreSupplierRequest $request): JsonResponse
    {
        $supplier = $this->supplierService->create($request->validated());

        return response()->json([
            'message' => 'Supplier berhasil dibuat.',
            'data' => new SupplierResource($supplier),
        ], 201);
    }

    public function show(Request $request, Supplier $supplier): JsonResponse
    {
        abort_unless($request->user()->can('suppliers.view'), 403);

        return response()->json([
            'message' => 'Detail supplier berhasil diambil.',
            'data' => new SupplierResource($supplier->loadCount('purchaseOrders')),
        ]);
    }

    public function update(UpdateSupplierRequest $request, Supplier $supplier): JsonResponse
    {
        $supplier = $this->supplierService->update($supplier, $request->validated());

        return response()->json([
            'message' => 'Supplier berhasil diupdate.',
            'data' => new SupplierResource($supplier),
        ]);
    }

    public function destroy(Request $request, Supplier $supplier): JsonResponse
    {
        abort_unless($request->user()->can('suppliers.delete'), 403);

        if ($supplier->purchaseOrders()->exists()) {
            return response()->json([
                'message' => 'Supplier tidak bisa dihapus karena sudah dipakai purchase order.',
            ], 422);
        }

        $supplier->delete();

        return response()->json([
            'message' => 'Supplier berhasil dihapus.',
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

<a id="file-apphttpcontrollersapiunitcontrollerphp"></a>
### app\Http\Controllers\Api\UnitController.php
- SHA: `f54f6a5f523b`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `UnitController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly UnitService $unitService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreUnitRequest $request) : *JsonResponse*
- **show**(Request $request, Unit $unit) : *JsonResponse*
- **update**(UpdateUnitRequest $request, Unit $unit) : *JsonResponse*
- **destroy**(Request $request, Unit $unit) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\Unit\StoreUnitRequest;
use App\Http\Requests\Api\Inventory\Unit\UpdateUnitRequest;
use App\Http\Resources\UnitResource;
use App\Models\Unit;
use App\Services\Inventory\UnitService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function __construct(
        private readonly UnitService $unitService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('units.view'), 403);

        $units = Unit::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('code', 'like', "%{$search}%");
                });
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar satuan berhasil diambil.',
            'data' => UnitResource::collection($units),
            'meta' => [
                'current_page' => $units->currentPage(),
                'last_page' => $units->lastPage(),
                'per_page' => $units->perPage(),
                'total' => $units->total(),
            ],
        ]);
    }

    public function store(StoreUnitRequest $request): JsonResponse
    {
        $unit = $this->unitService->create($request->validated());

        return response()->json([
            'message' => 'Satuan berhasil dibuat.',
            'data' => new UnitResource($unit),
        ], 201);
    }

    public function show(Request $request, Unit $unit): JsonResponse
    {
        abort_unless($request->user()->can('units.view'), 403);

        return response()->json([
            'message' => 'Detail satuan berhasil diambil.',
            'data' => new UnitResource($unit),
        ]);
    }

    public function update(UpdateUnitRequest $request, Unit $unit): JsonResponse
    {
        $unit = $this->unitService->update($unit, $request->validated());

        return response()->json([
            'message' => 'Satuan berhasil diupdate.',
            'data' => new UnitResource($unit),
        ]);
    }

    public function destroy(Request $request, Unit $unit): JsonResponse
    {
        abort_unless($request->user()->can('units.delete'), 403);

        if ($unit->rawMaterials()->exists() || $unit->bomItems()->exists()) {
            return response()->json([
                'message' => 'Satuan tidak bisa dihapus karena masih dipakai.',
            ], 422);
        }

        $unit->delete();

        return response()->json([
            'message' => 'Satuan berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapiunitconversioncontrollerphp"></a>
### app\Http\Controllers\Api\UnitConversionController.php
- SHA: `b5bcce73beea`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `UnitConversionController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly UnitConversionService $unitConversionService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreUnitConversionRequest $request) : *JsonResponse*
- **show**(Request $request, UnitConversion $unitConversion) : *JsonResponse*
- **update**(UpdateUnitConversionRequest $request, UnitConversion $unitConversion) : *JsonResponse*
- **destroy**(Request $request, UnitConversion $unitConversion) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\UnitConversion\StoreUnitConversionRequest;
use App\Http\Requests\Api\Inventory\UnitConversion\UpdateUnitConversionRequest;
use App\Http\Resources\UnitConversionResource;
use App\Models\UnitConversion;
use App\Services\Inventory\UnitConversionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UnitConversionController extends Controller
{
    public function __construct(
        private readonly UnitConversionService $unitConversionService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('unit_conversions.view'), 403);

        $rows = UnitConversion::query()
            ->with(['fromUnit', 'toUnit'])
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar konversi satuan berhasil diambil.',
            'data' => UnitConversionResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreUnitConversionRequest $request): JsonResponse
    {
        $row = $this->unitConversionService->create($request->validated());

        return response()->json([
            'message' => 'Konversi satuan berhasil dibuat.',
            'data' => new UnitConversionResource($row->load(['fromUnit', 'toUnit'])),
        ], 201);
    }

    public function show(Request $request, UnitConversion $unitConversion): JsonResponse
    {
        abort_unless($request->user()->can('unit_conversions.view'), 403);

        return response()->json([
            'message' => 'Detail konversi satuan berhasil diambil.',
            'data' => new UnitConversionResource($unitConversion->load(['fromUnit', 'toUnit'])),
        ]);
    }

    public function update(UpdateUnitConversionRequest $request, UnitConversion $unitConversion): JsonResponse
    {
        $unitConversion = $this->unitConversionService->update($unitConversion, $request->validated());

        return response()->json([
            'message' => 'Konversi satuan berhasil diupdate.',
            'data' => new UnitConversionResource($unitConversion->load(['fromUnit', 'toUnit'])),
        ]);
    }

    public function destroy(Request $request, UnitConversion $unitConversion): JsonResponse
    {
        abort_unless($request->user()->can('unit_conversions.delete'), 403);

        $unitConversion->delete();

        return response()->json([
            'message' => 'Konversi satuan berhasil dihapus.',
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

<a id="file-apphttpcontrollersapivouchercontrollerphp"></a>
### app\Http\Controllers\Api\VoucherController.php
- SHA: `46bfbf68aa7e`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `VoucherController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly VoucherService $voucherService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreVoucherRequest $request) : *JsonResponse*
- **show**(Request $request, Voucher $voucher) : *JsonResponse*
- **update**(UpdateVoucherRequest $request, Voucher $voucher) : *JsonResponse*
- **destroy**(Request $request, Voucher $voucher) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Voucher\StoreVoucherRequest;
use App\Http\Requests\Api\Voucher\UpdateVoucherRequest;
use App\Http\Resources\VoucherResource;
use App\Models\Voucher;
use App\Services\Voucher\VoucherService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function __construct(
        private readonly VoucherService $voucherService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('vouchers.view'), 403);

        $vouchers = Voucher::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->when($request->filled('discount_type'), function ($query) use ($request) {
                $query->where('discount_type', $request->string('discount_type')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar voucher berhasil diambil.',
            'data' => VoucherResource::collection($vouchers),
            'meta' => [
                'current_page' => $vouchers->currentPage(),
                'last_page' => $vouchers->lastPage(),
                'per_page' => $vouchers->perPage(),
                'total' => $vouchers->total(),
            ],
        ]);
    }

    public function store(StoreVoucherRequest $request): JsonResponse
    {
        $voucher = $this->voucherService->create($request->validated());

        return response()->json([
            'message' => 'Voucher berhasil dibuat.',
            'data' => new VoucherResource($voucher),
        ], 201);
    }

    public function show(Request $request, Voucher $voucher): JsonResponse
    {
        abort_unless($request->user()->can('vouchers.view'), 403);

        return response()->json([
            'message' => 'Detail voucher berhasil diambil.',
            'data' => new VoucherResource($voucher),
        ]);
    }

    public function update(UpdateVoucherRequest $request, Voucher $voucher): JsonResponse
    {
        $voucher = $this->voucherService->update($voucher, $request->validated());

        return response()->json([
            'message' => 'Voucher berhasil diupdate.',
            'data' => new VoucherResource($voucher),
        ]);
    }

    public function destroy(Request $request, Voucher $voucher): JsonResponse
    {
        abort_unless($request->user()->can('vouchers.delete'), 403);

        $voucher->delete();

        return response()->json([
            'message' => 'Voucher berhasil dihapus.',
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

<a id="file-apphttprequestsapicustomerstorecustomerrequestphp"></a>
### app\Http\Requests\Api\Customer\StoreCustomerRequest.php
- SHA: `ae76a38dc4b9`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Api\Customer`

**Class `StoreCustomerRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('customers.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'code' => ['nullable', 'string', 'max:100', Rule::unique('customers', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50', Rule::unique('customers', 'phone')],
            'email' => ['nullable', 'email', 'max:255', Rule::unique('customers', 'email')],
            'gender' => ['nullable', 'string', 'max:50'],
            'birth_date' => ['nullable', 'date'],
            'points' => ['sometimes', 'integer', 'min:0'],
            'total_spent' => ['sometimes', 'numeric', 'min:0'],
            'is_member' => ['sometimes', 'boolean'],
            'notes' => ['nullable', 'string'],

            'addresses' => ['nullable', 'array'],
            'addresses.*.label' => ['nullable', 'string', 'max:100'],
            'addresses.*.recipient_name' => ['nullable', 'string', 'max:255'],
            'addresses.*.recipient_phone' => ['nullable', 'string', 'max:50'],
            'addresses.*.address' => ['required_with:addresses', 'string'],
            'addresses.*.city' => ['nullable', 'string', 'max:100'],
            'addresses.*.province' => ['nullable', 'string', 'max:100'],
            'addresses.*.postal_code' => ['nullable', 'string', 'max:20'],
            'addresses.*.latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'addresses.*.longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'addresses.*.is_default' => ['sometimes', 'boolean'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapicustomerupdatecustomerrequestphp"></a>
### app\Http\Requests\Api\Customer\UpdateCustomerRequest.php
- SHA: `eafe9236cbfe`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Api\Customer`

**Class `UpdateCustomerRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('customers.update') ?? false;
    }

    public function rules(): array
    {
        $customerId = $this->route('customer')->id;

        return [
            'code' => ['nullable', 'string', 'max:100', Rule::unique('customers', 'code')->ignore($customerId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50', Rule::unique('customers', 'phone')->ignore($customerId)],
            'email' => ['nullable', 'email', 'max:255', Rule::unique('customers', 'email')->ignore($customerId)],
            'gender' => ['nullable', 'string', 'max:50'],
            'birth_date' => ['nullable', 'date'],
            'points' => ['sometimes', 'integer', 'min:0'],
            'total_spent' => ['sometimes', 'numeric', 'min:0'],
            'is_member' => ['sometimes', 'boolean'],
            'notes' => ['nullable', 'string'],

            'addresses' => ['sometimes', 'array'],
            'addresses.*.label' => ['nullable', 'string', 'max:100'],
            'addresses.*.recipient_name' => ['nullable', 'string', 'max:255'],
            'addresses.*.recipient_phone' => ['nullable', 'string', 'max:50'],
            'addresses.*.address' => ['required_with:addresses', 'string'],
            'addresses.*.city' => ['nullable', 'string', 'max:100'],
            'addresses.*.province' => ['nullable', 'string', 'max:100'],
            'addresses.*.postal_code' => ['nullable', 'string', 'max:20'],
            'addresses.*.latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'addresses.*.longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'addresses.*.is_default' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryoutletmaterialstockupsertoutletmaterialstockrequestphp"></a>
### app\Http\Requests\Api\Inventory\OutletMaterialStock\UpsertOutletMaterialStockRequest.php
- SHA: `3ecf58a4cd7d`  
- Ukuran: 717 B  
- Namespace: `App\Http\Requests\Api\Inventory\OutletMaterialStock`

**Class `UpsertOutletMaterialStockRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\OutletMaterialStock;

use Illuminate\Foundation\Http\FormRequest;

class UpsertOutletMaterialStockRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('outlet_material_stocks.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'qty_on_hand' => ['sometimes', 'numeric'],
            'qty_reserved' => ['sometimes', 'numeric', 'min:0'],
            'last_movement_at' => ['nullable', 'date'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryproductbomstoreproductbomrequestphp"></a>
### app\Http\Requests\Api\Inventory\ProductBom\StoreProductBomRequest.php
- SHA: `6ef341b9b7e2`  
- Ukuran: 961 B  
- Namespace: `App\Http\Requests\Api\Inventory\ProductBom`

**Class `StoreProductBomRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\ProductBom;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductBomRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('product_boms.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'product_id' => ['required', 'integer', 'exists:products,id'],
            'version' => ['sometimes', 'integer', 'min:1'],
            'is_active' => ['sometimes', 'boolean'],
            'notes' => ['nullable', 'string'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.qty' => ['required', 'numeric', 'gt:0'],
            'items.*.waste_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryproductbomupdateproductbomrequestphp"></a>
### app\Http\Requests\Api\Inventory\ProductBom\UpdateProductBomRequest.php
- SHA: `0bdc70eba453`  
- Ukuran: 1009 B  
- Namespace: `App\Http\Requests\Api\Inventory\ProductBom`

**Class `UpdateProductBomRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\ProductBom;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductBomRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('product_boms.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'product_id' => ['sometimes', 'required', 'integer', 'exists:products,id'],
            'version' => ['sometimes', 'integer', 'min:1'],
            'is_active' => ['sometimes', 'boolean'],
            'notes' => ['nullable', 'string'],
            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.qty' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.waste_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryrawmaterialstorerawmaterialrequestphp"></a>
### app\Http\Requests\Api\Inventory\RawMaterial\StoreRawMaterialRequest.php
- SHA: `da16e38c0db4`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Inventory\RawMaterial`

**Class `StoreRawMaterialRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\RawMaterial;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRawMaterialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_materials.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'raw_material_category_id' => ['required', 'integer', 'exists:raw_material_categories,id'],
            'unit_id' => ['required', 'integer', 'exists:units,id'],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'code')],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'sku')],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'minimum_stock' => ['sometimes', 'numeric', 'min:0'],
            'last_purchase_price' => ['sometimes', 'numeric', 'min:0'],
            'average_cost' => ['sometimes', 'numeric', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],

            'outlet_stocks' => ['nullable', 'array'],
            'outlet_stocks.*.outlet_id' => ['required_with:outlet_stocks', 'integer', 'exists:outlets,id'],
            'outlet_stocks.*.qty_on_hand' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.qty_reserved' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.last_movement_at' => ['nullable', 'date'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryrawmaterialupdaterawmaterialrequestphp"></a>
### app\Http\Requests\Api\Inventory\RawMaterial\UpdateRawMaterialRequest.php
- SHA: `2a184f75afae`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Api\Inventory\RawMaterial`

**Class `UpdateRawMaterialRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\RawMaterial;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRawMaterialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_materials.update') ?? false;
    }

    public function rules(): array
    {
        $id = $this->route('rawMaterial')->id;

        return [
            'raw_material_category_id' => ['sometimes', 'required', 'integer', 'exists:raw_material_categories,id'],
            'unit_id' => ['sometimes', 'required', 'integer', 'exists:units,id'],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'code')->ignore($id)],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'sku')->ignore($id)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'minimum_stock' => ['sometimes', 'numeric', 'min:0'],
            'last_purchase_price' => ['sometimes', 'numeric', 'min:0'],
            'average_cost' => ['sometimes', 'numeric', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],

            'outlet_stocks' => ['sometimes', 'array'],
            'outlet_stocks.*.outlet_id' => ['required_with:outlet_stocks', 'integer', 'exists:outlets,id'],
            'outlet_stocks.*.qty_on_hand' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.qty_reserved' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.last_movement_at' => ['nullable', 'date'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryrawmaterialcategorystorerawmaterialcategoryrequestphp"></a>
### app\Http\Requests\Api\Inventory\RawMaterialCategory\StoreRawMaterialCategoryRequest.php
- SHA: `98f70b7c0cc2`  
- Ukuran: 440 B  
- Namespace: `App\Http\Requests\Api\Inventory\RawMaterialCategory`

**Class `StoreRawMaterialCategoryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\RawMaterialCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreRawMaterialCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_material_categories.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryrawmaterialcategoryupdaterawmaterialcategoryrequestphp"></a>
### app\Http\Requests\Api\Inventory\RawMaterialCategory\UpdateRawMaterialCategoryRequest.php
- SHA: `f9078e315177`  
- Ukuran: 454 B  
- Namespace: `App\Http\Requests\Api\Inventory\RawMaterialCategory`

**Class `UpdateRawMaterialCategoryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\RawMaterialCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRawMaterialCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_material_categories.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryunitstoreunitrequestphp"></a>
### app\Http\Requests\Api\Inventory\Unit\StoreUnitRequest.php
- SHA: `b7df1166a5d9`  
- Ukuran: 511 B  
- Namespace: `App\Http\Requests\Api\Inventory\Unit`

**Class `StoreUnitRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\Unit;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUnitRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('units.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:50', Rule::unique('units', 'code')],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryunitupdateunitrequestphp"></a>
### app\Http\Requests\Api\Inventory\Unit\UpdateUnitRequest.php
- SHA: `0871e5c8d2f0`  
- Ukuran: 592 B  
- Namespace: `App\Http\Requests\Api\Inventory\Unit`

**Class `UpdateUnitRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\Unit;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUnitRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('units.update') ?? false;
    }

    public function rules(): array
    {
        $id = $this->route('unit')->id;

        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'code' => ['sometimes', 'required', 'string', 'max:50', Rule::unique('units', 'code')->ignore($id)],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryunitconversionstoreunitconversionrequestphp"></a>
### app\Http\Requests\Api\Inventory\UnitConversion\StoreUnitConversionRequest.php
- SHA: `e7b15c89914a`  
- Ukuran: 833 B  
- Namespace: `App\Http\Requests\Api\Inventory\UnitConversion`

**Class `StoreUnitConversionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\UnitConversion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUnitConversionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('unit_conversions.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'from_unit_id' => ['required', 'integer', 'exists:units,id', 'different:to_unit_id'],
            'to_unit_id' => ['required', 'integer', 'exists:units,id'],
            'multiplier' => ['required', 'numeric', 'gt:0'],
            Rule::unique('unit_conversions')->where(fn ($q) => $q
                ->where('from_unit_id', $this->input('from_unit_id'))
                ->where('to_unit_id', $this->input('to_unit_id'))),
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryunitconversionupdateunitconversionrequestphp"></a>
### app\Http\Requests\Api\Inventory\UnitConversion\UpdateUnitConversionRequest.php
- SHA: `4a69032005cc`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Inventory\UnitConversion`

**Class `UpdateUnitConversionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\UnitConversion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUnitConversionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('unit_conversions.update') ?? false;
    }

    public function rules(): array
    {
        $id = $this->route('unitConversion')->id;

        return [
            'from_unit_id' => ['sometimes', 'required', 'integer', 'exists:units,id', 'different:to_unit_id'],
            'to_unit_id' => ['sometimes', 'required', 'integer', 'exists:units,id'],
            'multiplier' => ['sometimes', 'required', 'numeric', 'gt:0'],
            Rule::unique('unit_conversions')->ignore($id)->where(fn ($q) => $q
                ->where('from_unit_id', $this->input('from_unit_id', $this->route('unitConversion')->from_unit_id))
                ->where('to_unit_id', $this->input('to_unit_id', $this->route('unitConversion')->to_unit_id))),
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
- SHA: `72f9732bbc64`  
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

<a id="file-apphttprequestsapipromotionstorepromotionrequestphp"></a>
### app\Http\Requests\Api\Promotion\StorePromotionRequest.php
- SHA: `e9f6d9cfb0ed`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Promotion`

**Class `StorePromotionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Promotion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePromotionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('promotions.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'promotion_type' => ['required', Rule::in(['discount', 'bundle', 'buy_x_get_y'])],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'priority' => ['sometimes', 'integer'],
            'is_active' => ['sometimes', 'boolean'],

            'rules' => ['nullable', 'array'],
            'rules.*.rule_type' => ['required_with:rules', Rule::in(['min_total', 'product', 'category', 'outlet', 'channel', 'time'])],
            'rules.*.operator' => ['nullable', 'string', 'max:50'],
            'rules.*.value' => ['nullable'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapipromotionupdatepromotionrequestphp"></a>
### app\Http\Requests\Api\Promotion\UpdatePromotionRequest.php
- SHA: `06d42f7f076d`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Promotion`

**Class `UpdatePromotionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Promotion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePromotionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('promotions.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'promotion_type' => ['sometimes', 'required', Rule::in(['discount', 'bundle', 'buy_x_get_y'])],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'priority' => ['sometimes', 'integer'],
            'is_active' => ['sometimes', 'boolean'],

            'rules' => ['sometimes', 'array'],
            'rules.*.rule_type' => ['required_with:rules', Rule::in(['min_total', 'product', 'category', 'outlet', 'channel', 'time'])],
            'rules.*.operator' => ['nullable', 'string', 'max:50'],
            'rules.*.value' => ['nullable'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapipurchasinggoodsreceiptpostgoodsreceiptrequestphp"></a>
### app\Http\Requests\Api\Purchasing\GoodsReceipt\PostGoodsReceiptRequest.php
- SHA: `92dad139158f`  
- Ukuran: 349 B  
- Namespace: `App\Http\Requests\Api\Purchasing\GoodsReceipt`

**Class `PostGoodsReceiptRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\GoodsReceipt;

use Illuminate\Foundation\Http\FormRequest;

class PostGoodsReceiptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('goods_receipts.post') ?? false;
    }

    public function rules(): array
    {
        return [];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasinggoodsreceiptstoregoodsreceiptrequestphp"></a>
### app\Http\Requests\Api\Purchasing\GoodsReceipt\StoreGoodsReceiptRequest.php
- SHA: `f8dd74858cc7`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Purchasing\GoodsReceipt`

**Class `StoreGoodsReceiptRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\GoodsReceipt;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreGoodsReceiptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('goods_receipts.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'purchase_order_id' => ['required', 'integer', 'exists:purchase_orders,id'],
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'receipt_number' => ['nullable', 'string', 'max:100', Rule::unique('goods_receipts', 'receipt_number')],
            'received_date' => ['required', 'date'],
            'status' => ['sometimes', Rule::in(['draft', 'posted', 'cancelled'])],
            'notes' => ['nullable', 'string'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.qty_received' => ['required', 'numeric', 'gt:0'],
            'items.*.unit_cost' => ['required', 'numeric', 'min:0'],
            'items.*.expired_at' => ['nullable', 'date'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasinggoodsreceiptupdategoodsreceiptrequestphp"></a>
### app\Http\Requests\Api\Purchasing\GoodsReceipt\UpdateGoodsReceiptRequest.php
- SHA: `d32e9853f2b0`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Purchasing\GoodsReceipt`

**Class `UpdateGoodsReceiptRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\GoodsReceipt;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGoodsReceiptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('goods_receipts.update') ?? false;
    }

    public function rules(): array
    {
        $goodsReceiptId = $this->route('goodsReceipt')->id;

        return [
            'purchase_order_id' => ['sometimes', 'required', 'integer', 'exists:purchase_orders,id'],
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'receipt_number' => ['nullable', 'string', 'max:100', Rule::unique('goods_receipts', 'receipt_number')->ignore($goodsReceiptId)],
            'received_date' => ['sometimes', 'required', 'date'],
            'notes' => ['nullable', 'string'],
            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.qty_received' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.unit_cost' => ['required_with:items', 'numeric', 'min:0'],
            'items.*.expired_at' => ['nullable', 'date'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasingpurchaseorderstorepurchaseorderrequestphp"></a>
### app\Http\Requests\Api\Purchasing\PurchaseOrder\StorePurchaseOrderRequest.php
- SHA: `8609c250d3eb`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Api\Purchasing\PurchaseOrder`

**Class `StorePurchaseOrderRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\PurchaseOrder;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePurchaseOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('purchase_orders.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'supplier_id' => ['required', 'integer', 'exists:suppliers,id'],
            'po_number' => ['nullable', 'string', 'max:100', Rule::unique('purchase_orders', 'po_number')],
            'status' => ['sometimes', Rule::in(['draft', 'approved', 'partial_received', 'received', 'cancelled'])],
            'order_date' => ['required', 'date'],
            'expected_date' => ['nullable', 'date'],
            'discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'tax_amount' => ['sometimes', 'numeric', 'min:0'],
            'notes' => ['nullable', 'string'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.qty_ordered' => ['required', 'numeric', 'gt:0'],
            'items.*.unit_price' => ['required', 'numeric', 'min:0'],
            'items.*.discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasingpurchaseorderupdatepurchaseorderrequestphp"></a>
### app\Http\Requests\Api\Purchasing\PurchaseOrder\UpdatePurchaseOrderRequest.php
- SHA: `826f1a158346`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Api\Purchasing\PurchaseOrder`

**Class `UpdatePurchaseOrderRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\PurchaseOrder;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePurchaseOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('purchase_orders.update') ?? false;
    }

    public function rules(): array
    {
        $purchaseOrderId = $this->route('purchaseOrder')->id;

        return [
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'supplier_id' => ['sometimes', 'required', 'integer', 'exists:suppliers,id'],
            'po_number' => ['nullable', 'string', 'max:100', Rule::unique('purchase_orders', 'po_number')->ignore($purchaseOrderId)],
            'order_date' => ['sometimes', 'required', 'date'],
            'expected_date' => ['nullable', 'date'],
            'discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'tax_amount' => ['sometimes', 'numeric', 'min:0'],
            'notes' => ['nullable', 'string'],
            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.qty_ordered' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.unit_price' => ['required_with:items', 'numeric', 'min:0'],
            'items.*.discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasingsupplierstoresupplierrequestphp"></a>
### app\Http\Requests\Api\Purchasing\Supplier\StoreSupplierRequest.php
- SHA: `e66258244705`  
- Ukuran: 869 B  
- Namespace: `App\Http\Requests\Api\Purchasing\Supplier`

**Class `StoreSupplierRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\Supplier;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSupplierRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('suppliers.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'code' => ['nullable', 'string', 'max:100', Rule::unique('suppliers', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string'],
            'city' => ['nullable', 'string', 'max:100'],
            'contact_person' => ['nullable', 'string', 'max:255'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasingsupplierupdatesupplierrequestphp"></a>
### app\Http\Requests\Api\Purchasing\Supplier\UpdateSupplierRequest.php
- SHA: `cd7752620749`  
- Ukuran: 957 B  
- Namespace: `App\Http\Requests\Api\Purchasing\Supplier`

**Class `UpdateSupplierRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\Supplier;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSupplierRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('suppliers.update') ?? false;
    }

    public function rules(): array
    {
        $supplierId = $this->route('supplier')->id;

        return [
            'code' => ['nullable', 'string', 'max:100', Rule::unique('suppliers', 'code')->ignore($supplierId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string'],
            'city' => ['nullable', 'string', 'max:100'],
            'contact_person' => ['nullable', 'string', 'max:255'],
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

<a id="file-apphttprequestsapivoucherstorevoucherrequestphp"></a>
### app\Http\Requests\Api\Voucher\StoreVoucherRequest.php
- SHA: `436f2e74d123`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Voucher`

**Class `StoreVoucherRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Voucher;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVoucherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('vouchers.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'code' => ['required', 'string', 'max:100', Rule::unique('vouchers', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'discount_type' => ['required', Rule::in(['percent', 'fixed'])],
            'discount_value' => ['required', 'numeric', 'min:0'],
            'max_discount' => ['nullable', 'numeric', 'min:0'],
            'min_order_total' => ['sometimes', 'numeric', 'min:0'],
            'quota' => ['nullable', 'integer', 'min:1'],
            'used_count' => ['sometimes', 'integer', 'min:0'],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'is_active' => ['sometimes', 'boolean'],
            'applies_to' => ['required', Rule::in(['all', 'specific_products', 'specific_categories'])],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapivoucherupdatevoucherrequestphp"></a>
### app\Http\Requests\Api\Voucher\UpdateVoucherRequest.php
- SHA: `035c34e02137`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Voucher`

**Class `UpdateVoucherRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Voucher;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateVoucherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('vouchers.update') ?? false;
    }

    public function rules(): array
    {
        $voucherId = $this->route('voucher')->id;

        return [
            'code' => ['sometimes', 'required', 'string', 'max:100', Rule::unique('vouchers', 'code')->ignore($voucherId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'discount_type' => ['sometimes', 'required', Rule::in(['percent', 'fixed'])],
            'discount_value' => ['sometimes', 'required', 'numeric', 'min:0'],
            'max_discount' => ['nullable', 'numeric', 'min:0'],
            'min_order_total' => ['sometimes', 'numeric', 'min:0'],
            'quota' => ['nullable', 'integer', 'min:1'],
            'used_count' => ['sometimes', 'integer', 'min:0'],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'is_active' => ['sometimes', 'boolean'],
            'applies_to' => ['sometimes', 'required', Rule::in(['all', 'specific_products', 'specific_categories'])],
        ];
    }
}
```
</details>


## API Resources (app/Http/Resources)

<a id="file-apphttpresourcescustomeraddressresourcephp"></a>
### app\Http\Resources\CustomerAddressResource.php
- SHA: `dc3eab6a1caa`  
- Ukuran: 890 B  
- Namespace: `App\Http\Resources`

**Class `CustomerAddressResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerAddressResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'customer_id' => $this->customer_id,
            'label' => $this->label,
            'recipient_name' => $this->recipient_name,
            'recipient_phone' => $this->recipient_phone,
            'address' => $this->address,
            'city' => $this->city,
            'province' => $this->province,
            'postal_code' => $this->postal_code,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'is_default' => $this->is_default,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcescustomerresourcephp"></a>
### app\Http\Resources\CustomerResource.php
- SHA: `eaaf7c99c9c6`  
- Ukuran: 942 B  
- Namespace: `App\Http\Resources`

**Class `CustomerResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'gender' => $this->gender,
            'birth_date' => $this->birth_date?->toDateString(),
            'points' => $this->points,
            'total_spent' => $this->total_spent,
            'is_member' => $this->is_member,
            'notes' => $this->notes,
            'addresses' => CustomerAddressResource::collection($this->whenLoaded('addresses')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesgoodsreceiptitemresourcephp"></a>
### app\Http\Resources\GoodsReceiptItemResource.php
- SHA: `4f041367a324`  
- Ukuran: 993 B  
- Namespace: `App\Http\Resources`

**Class `GoodsReceiptItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GoodsReceiptItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'goods_receipt_id' => $this->goods_receipt_id,
            'raw_material_id' => $this->raw_material_id,
            'raw_material_name' => $this->rawMaterial?->name,
            'raw_material_code' => $this->rawMaterial?->code,
            'unit_id' => $this->unit_id,
            'unit_name' => $this->unit?->name,
            'unit_code' => $this->unit?->code,
            'qty_received' => $this->qty_received,
            'unit_cost' => $this->unit_cost,
            'line_total' => $this->line_total,
            'expired_at' => $this->expired_at,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesgoodsreceiptresourcephp"></a>
### app\Http\Resources\GoodsReceiptResource.php
- SHA: `a7840fc18d17`  
- Ukuran: 997 B  
- Namespace: `App\Http\Resources`

**Class `GoodsReceiptResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GoodsReceiptResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'purchase_order_id' => $this->purchase_order_id,
            'purchase_order_number' => $this->purchaseOrder?->po_number,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'receipt_number' => $this->receipt_number,
            'received_date' => $this->received_date,
            'status' => $this->status,
            'notes' => $this->notes,
            'received_by' => $this->received_by,
            'received_by_name' => $this->receiver?->name,
            'items' => GoodsReceiptItemResource::collection($this->whenLoaded('items')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesoutletmaterialstockresourcephp"></a>
### app\Http\Resources\OutletMaterialStockResource.php
- SHA: `fd9d684bc04c`  
- Ukuran: 881 B  
- Namespace: `App\Http\Resources`

**Class `OutletMaterialStockResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OutletMaterialStockResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'outlet_code' => $this->outlet?->code,
            'raw_material_id' => $this->raw_material_id,
            'raw_material_name' => $this->rawMaterial?->name,
            'raw_material_code' => $this->rawMaterial?->code,
            'qty_on_hand' => $this->qty_on_hand,
            'qty_reserved' => $this->qty_reserved,
            'last_movement_at' => $this->last_movement_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

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

<a id="file-apphttpresourcesproductbomitemresourcephp"></a>
### app\Http\Resources\ProductBomItemResource.php
- SHA: `dd15cc4128c7`  
- Ukuran: 846 B  
- Namespace: `App\Http\Resources`

**Class `ProductBomItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductBomItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_bom_id' => $this->product_bom_id,
            'raw_material_id' => $this->raw_material_id,
            'raw_material_name' => $this->rawMaterial?->name,
            'raw_material_code' => $this->rawMaterial?->code,
            'unit_id' => $this->unit_id,
            'unit_name' => $this->unit?->name,
            'unit_code' => $this->unit?->code,
            'qty' => $this->qty,
            'waste_percent' => $this->waste_percent,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesproductbomresourcephp"></a>
### app\Http\Resources\ProductBomResource.php
- SHA: `e64e4b039456`  
- Ukuran: 748 B  
- Namespace: `App\Http\Resources`

**Class `ProductBomResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductBomResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'product_name' => $this->product?->name,
            'product_code' => $this->product?->code,
            'version' => $this->version,
            'is_active' => $this->is_active,
            'notes' => $this->notes,
            'items' => ProductBomItemResource::collection($this->whenLoaded('items')),
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

<a id="file-apphttpresourcespromotionresourcephp"></a>
### app\Http\Resources\PromotionResource.php
- SHA: `dd884d6e207d`  
- Ukuran: 782 B  
- Namespace: `App\Http\Resources`

**Class `PromotionResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PromotionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'promotion_type' => $this->promotion_type,
            'starts_at' => $this->starts_at,
            'ends_at' => $this->ends_at,
            'priority' => $this->priority,
            'is_active' => $this->is_active,
            'rules' => PromotionRuleResource::collection($this->whenLoaded('rules')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcespromotionruleresourcephp"></a>
### app\Http\Resources\PromotionRuleResource.php
- SHA: `73592a4a0d35`  
- Ukuran: 563 B  
- Namespace: `App\Http\Resources`

**Class `PromotionRuleResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PromotionRuleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'promotion_id' => $this->promotion_id,
            'rule_type' => $this->rule_type,
            'operator' => $this->operator,
            'value' => $this->value,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcespurchaseorderitemresourcephp"></a>
### app\Http\Resources\PurchaseOrderItemResource.php
- SHA: `2f6a54bf45a7`  
- Ukuran: 1006 B  
- Namespace: `App\Http\Resources`

**Class `PurchaseOrderItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseOrderItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'purchase_order_id' => $this->purchase_order_id,
            'raw_material_id' => $this->raw_material_id,
            'raw_material_name' => $this->rawMaterial?->name,
            'raw_material_code' => $this->rawMaterial?->code,
            'unit_id' => $this->unit_id,
            'unit_name' => $this->unit?->name,
            'unit_code' => $this->unit?->code,
            'qty_ordered' => $this->qty_ordered,
            'unit_price' => $this->unit_price,
            'discount_amount' => $this->discount_amount,
            'line_total' => $this->line_total,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcespurchaseorderresourcephp"></a>
### app\Http\Resources\PurchaseOrderResource.php
- SHA: `fc35e9dd3de6`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `PurchaseOrderResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseOrderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'supplier_id' => $this->supplier_id,
            'supplier_name' => $this->supplier?->name,
            'po_number' => $this->po_number,
            'status' => $this->status,
            'order_date' => $this->order_date,
            'expected_date' => $this->expected_date,
            'subtotal' => $this->subtotal,
            'discount_amount' => $this->discount_amount,
            'tax_amount' => $this->tax_amount,
            'total_amount' => $this->total_amount,
            'notes' => $this->notes,
            'approved_by' => $this->approved_by,
            'approved_by_name' => $this->approver?->name,
            'approved_at' => $this->approved_at,
            'created_by' => $this->created_by,
            'created_by_name' => $this->creator?->name,
            'items' => PurchaseOrderItemResource::collection($this->whenLoaded('items')),
            'goods_receipts_count' => $this->whenCounted('goodsReceipts'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesrawmaterialcategoryresourcephp"></a>
### app\Http\Resources\RawMaterialCategoryResource.php
- SHA: `fc3fa2f0720e`  
- Ukuran: 502 B  
- Namespace: `App\Http\Resources`

**Class `RawMaterialCategoryResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RawMaterialCategoryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'raw_materials_count' => $this->whenCounted('rawMaterials'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesrawmaterialresourcephp"></a>
### app\Http\Resources\RawMaterialResource.php
- SHA: `c3d512d2b1da`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `RawMaterialResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RawMaterialResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'raw_material_category_id' => $this->raw_material_category_id,
            'category' => $this->whenLoaded('category', function () {
                return [
                    'id' => $this->category?->id,
                    'name' => $this->category?->name,
                ];
            }),
            'unit_id' => $this->unit_id,
            'unit' => $this->whenLoaded('unit', function () {
                return [
                    'id' => $this->unit?->id,
                    'name' => $this->unit?->name,
                    'code' => $this->unit?->code,
                ];
            }),
            'code' => $this->code,
            'sku' => $this->sku,
            'name' => $this->name,
            'description' => $this->description,
            'minimum_stock' => $this->minimum_stock,
            'last_purchase_price' => $this->last_purchase_price,
            'average_cost' => $this->average_cost,
            'is_active' => $this->is_active,
            'outlet_stocks' => OutletMaterialStockResource::collection($this->whenLoaded('outletStocks')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
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

<a id="file-apphttpresourcessupplierresourcephp"></a>
### app\Http\Resources\SupplierResource.php
- SHA: `514d021023cf`  
- Ukuran: 827 B  
- Namespace: `App\Http\Resources`

**Class `SupplierResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupplierResource extends JsonResource
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
            'contact_person' => $this->contact_person,
            'is_active' => $this->is_active,
            'purchase_orders_count' => $this->whenCounted('purchaseOrders'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
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

<a id="file-apphttpresourcesunitconversionresourcephp"></a>
### app\Http\Resources\UnitConversionResource.php
- SHA: `4a5183b01741`  
- Ukuran: 750 B  
- Namespace: `App\Http\Resources`

**Class `UnitConversionResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UnitConversionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'from_unit_id' => $this->from_unit_id,
            'from_unit_name' => $this->fromUnit?->name,
            'from_unit_code' => $this->fromUnit?->code,
            'to_unit_id' => $this->to_unit_id,
            'to_unit_name' => $this->toUnit?->name,
            'to_unit_code' => $this->toUnit?->code,
            'multiplier' => $this->multiplier,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesunitresourcephp"></a>
### app\Http\Resources\UnitResource.php
- SHA: `f224b72a69e0`  
- Ukuran: 449 B  
- Namespace: `App\Http\Resources`

**Class `UnitResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UnitResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
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

<a id="file-apphttpresourcesvoucherresourcephp"></a>
### app\Http\Resources\VoucherResource.php
- SHA: `4dc15410b28c`  
- Ukuran: 978 B  
- Namespace: `App\Http\Resources`

**Class `VoucherResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VoucherResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'description' => $this->description,
            'discount_type' => $this->discount_type,
            'discount_value' => $this->discount_value,
            'max_discount' => $this->max_discount,
            'min_order_total' => $this->min_order_total,
            'quota' => $this->quota,
            'used_count' => $this->used_count,
            'starts_at' => $this->starts_at,
            'ends_at' => $this->ends_at,
            'is_active' => $this->is_active,
            'applies_to' => $this->applies_to,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>


## Models (app/Models)

<a id="file-appmodelscustomerphp"></a>
### app\Models\Customer.php
- SHA: `652c7ad531da`  
- Ukuran: 849 B  
- Namespace: `App\Models`

**Class `Customer` extends `Model`**

Metode Publik:
- **addresses**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'phone',
        'email',
        'gender',
        'birth_date',
        'points',
        'total_spent',
        'is_member',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
            'points' => 'integer',
            'total_spent' => 'decimal:2',
            'is_member' => 'boolean',
        ];
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(CustomerAddress::class);
    }
}
```
</details>

<a id="file-appmodelscustomeraddressphp"></a>
### app\Models\CustomerAddress.php
- SHA: `009a8f5a93d9`  
- Ukuran: 811 B  
- Namespace: `App\Models`

**Class `CustomerAddress` extends `Model`**

Metode Publik:
- **customer**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'label',
        'recipient_name',
        'recipient_phone',
        'address',
        'city',
        'province',
        'postal_code',
        'latitude',
        'longitude',
        'is_default',
    ];

    protected function casts(): array
    {
        return [
            'latitude' => 'decimal:7',
            'longitude' => 'decimal:7',
            'is_default' => 'boolean',
        ];
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
```
</details>

<a id="file-appmodelsgoodsreceiptphp"></a>
### app\Models\GoodsReceipt.php
- SHA: `371b7de801b9`  
- Ukuran: 918 B  
- Namespace: `App\Models`

**Class `GoodsReceipt` extends `Model`**

Metode Publik:
- **purchaseOrder**() : *BelongsTo*
- **outlet**() : *BelongsTo*
- **receiver**() : *BelongsTo*
- **items**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GoodsReceipt extends Model
{
    protected $fillable = [
        'purchase_order_id',
        'outlet_id',
        'receipt_number',
        'received_date',
        'status',
        'notes',
        'received_by',
    ];

    protected $casts = [
        'received_date' => 'datetime',
    ];

    public function purchaseOrder(): BelongsTo
    {
        return $this->belongsTo(PurchaseOrder::class);
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'received_by');
    }

    public function items(): HasMany
    {
        return $this->hasMany(GoodsReceiptItem::class);
    }
}

```
</details>

<a id="file-appmodelsgoodsreceiptitemphp"></a>
### app\Models\GoodsReceiptItem.php
- SHA: `52c1a8d6a349`  
- Ukuran: 879 B  
- Namespace: `App\Models`

**Class `GoodsReceiptItem` extends `Model`**

Metode Publik:
- **goodsReceipt**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
- **unit**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GoodsReceiptItem extends Model
{
    protected $fillable = [
        'goods_receipt_id',
        'raw_material_id',
        'unit_id',
        'qty_received',
        'unit_cost',
        'line_total',
        'expired_at',
        'notes',
    ];

    protected $casts = [
        'qty_received' => 'decimal:3',
        'unit_cost' => 'decimal:2',
        'line_total' => 'decimal:2',
        'expired_at' => 'date',
    ];

    public function goodsReceipt(): BelongsTo
    {
        return $this->belongsTo(GoodsReceipt::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}

```
</details>

<a id="file-appmodelsoutletphp"></a>
### app\Models\Outlet.php
- SHA: `25b8b4770fe6`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `Outlet` extends `Model`**

Metode Publik:
- **setting**() : *HasOne*
- **userAccesses**() : *HasMany*
- **users**() : *BelongsToMany*
- **materialStocks**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

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
            'latitude'  => 'decimal:7',
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

    public function materialStocks(): HasMany
    {
        return $this->hasMany(OutletMaterialStock::class);
    }
}

```
</details>

<a id="file-appmodelsoutletmaterialstockphp"></a>
### app\Models\OutletMaterialStock.php
- SHA: `bcb36a8588ef`  
- Ukuran: 825 B  
- Namespace: `App\Models`

**Class `OutletMaterialStock` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OutletMaterialStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'raw_material_id',
        'qty_on_hand',
        'qty_reserved',
        'last_movement_at',
    ];

    protected function casts(): array
    {
        return [
            'qty_on_hand' => 'decimal:3',
            'qty_reserved' => 'decimal:3',
            'last_movement_at' => 'datetime',
        ];
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
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
- SHA: `4497c5f448bf`  
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
- **boms**() : *HasMany*
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
            'base_price'         => 'decimal:2',
            'is_active'          => 'boolean',
            'is_featured'        => 'boolean',
            'track_recipe'       => 'boolean',
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

    public function boms(): HasMany
    {
        return $this->hasMany(ProductBom::class)->orderByDesc('version');
    }
}

```
</details>

<a id="file-appmodelsproductbomphp"></a>
### app\Models\ProductBom.php
- SHA: `9ee11ae1da9d`  
- Ukuran: 762 B  
- Namespace: `App\Models`

**Class `ProductBom` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **items**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductBom extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'version',
        'is_active',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'version' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(ProductBomItem::class);
    }
}

```
</details>

<a id="file-appmodelsproductbomitemphp"></a>
### app\Models\ProductBomItem.php
- SHA: `31ecb6b5e37c`  
- Ukuran: 872 B  
- Namespace: `App\Models`

**Class `ProductBomItem` extends `Model`**

Metode Publik:
- **bom**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
- **unit**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductBomItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_bom_id',
        'raw_material_id',
        'unit_id',
        'qty',
        'waste_percent',
    ];

    protected function casts(): array
    {
        return [
            'qty' => 'decimal:3',
            'waste_percent' => 'decimal:2',
        ];
    }

    public function bom(): BelongsTo
    {
        return $this->belongsTo(ProductBom::class, 'product_bom_id');
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
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

<a id="file-appmodelspromotionphp"></a>
### app\Models\Promotion.php
- SHA: `cf3a5601d276`  
- Ukuran: 761 B  
- Namespace: `App\Models`

**Class `Promotion` extends `Model`**

Metode Publik:
- **rules**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'promotion_type',
        'starts_at',
        'ends_at',
        'priority',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
            'priority' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function rules(): HasMany
    {
        return $this->hasMany(PromotionRule::class)->orderBy('id');
    }
}
```
</details>

<a id="file-appmodelspromotionrulephp"></a>
### app\Models\PromotionRule.php
- SHA: `a2ee8a601e15`  
- Ukuran: 462 B  
- Namespace: `App\Models`

**Class `PromotionRule` extends `Model`**

Metode Publik:
- **promotion**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PromotionRule extends Model
{
    use HasFactory;

    protected $fillable = [
        'promotion_id',
        'rule_type',
        'operator',
        'value',
    ];

    public function promotion(): BelongsTo
    {
        return $this->belongsTo(Promotion::class);
    }
}
```
</details>

<a id="file-appmodelspurchaseorderphp"></a>
### app\Models\PurchaseOrder.php
- SHA: `02c9189263f2`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `PurchaseOrder` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
- **supplier**() : *BelongsTo*
- **approver**() : *BelongsTo*
- **creator**() : *BelongsTo*
- **items**() : *HasMany*
- **goodsReceipts**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PurchaseOrder extends Model
{
    protected $fillable = [
        'outlet_id',
        'supplier_id',
        'po_number',
        'status',
        'order_date',
        'expected_date',
        'subtotal',
        'discount_amount',
        'tax_amount',
        'total_amount',
        'notes',
        'approved_by',
        'approved_at',
        'created_by',
    ];

    protected $casts = [
        'order_date' => 'date',
        'expected_date' => 'date',
        'approved_at' => 'datetime',
        'subtotal' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'tax_amount' => 'decimal:2',
        'total_amount' => 'decimal:2',
    ];

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function items(): HasMany
    {
        return $this->hasMany(PurchaseOrderItem::class);
    }

    public function goodsReceipts(): HasMany
    {
        return $this->hasMany(GoodsReceipt::class);
    }
}

```
</details>

<a id="file-appmodelspurchaseorderitemphp"></a>
### app\Models\PurchaseOrderItem.php
- SHA: `85f3d21e7122`  
- Ukuran: 898 B  
- Namespace: `App\Models`

**Class `PurchaseOrderItem` extends `Model`**

Metode Publik:
- **purchaseOrder**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
- **unit**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PurchaseOrderItem extends Model
{
    protected $fillable = [
        'purchase_order_id',
        'raw_material_id',
        'unit_id',
        'qty_ordered',
        'unit_price',
        'discount_amount',
        'line_total',
        'notes',
    ];

    protected $casts = [
        'qty_ordered' => 'decimal:3',
        'unit_price' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'line_total' => 'decimal:2',
    ];

    public function purchaseOrder(): BelongsTo
    {
        return $this->belongsTo(PurchaseOrder::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}

```
</details>

<a id="file-appmodelsrawmaterialphp"></a>
### app\Models\RawMaterial.php
- SHA: `af93bc40de5d`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `RawMaterial` extends `Model`**

Metode Publik:
- **category**() : *BelongsTo*
- **unit**() : *BelongsTo*
- **outletStocks**() : *HasMany*
- **bomItems**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class RawMaterial extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'raw_material_category_id',
        'unit_id',
        'code',
        'sku',
        'name',
        'description',
        'minimum_stock',
        'last_purchase_price',
        'average_cost',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'minimum_stock' => 'decimal:3',
            'last_purchase_price' => 'decimal:2',
            'average_cost' => 'decimal:2',
            'is_active' => 'boolean',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(RawMaterialCategory::class, 'raw_material_category_id');
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function outletStocks(): HasMany
    {
        return $this->hasMany(OutletMaterialStock::class);
    }

    public function bomItems(): HasMany
    {
        return $this->hasMany(ProductBomItem::class);
    }
}

```
</details>

<a id="file-appmodelsrawmaterialcategoryphp"></a>
### app\Models\RawMaterialCategory.php
- SHA: `cab31ff78e82`  
- Ukuran: 402 B  
- Namespace: `App\Models`

**Class `RawMaterialCategory` extends `Model`**

Metode Publik:
- **rawMaterials**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RawMaterialCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function rawMaterials(): HasMany
    {
        return $this->hasMany(RawMaterial::class);
    }
}

```
</details>

<a id="file-appmodelsstockmovementphp"></a>
### app\Models\StockMovement.php
- SHA: `5e17c6158821`  
- Ukuran: 804 B  
- Namespace: `App\Models`

**Class `StockMovement` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
- **creator**() : *BelongsTo*
- **items**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StockMovement extends Model
{
    protected $fillable = [
        'outlet_id',
        'movement_type',
        'reference_type',
        'reference_id',
        'movement_date',
        'notes',
        'created_by',
    ];

    protected $casts = [
        'movement_date' => 'datetime',
    ];

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function items(): HasMany
    {
        return $this->hasMany(StockMovementItem::class);
    }
}

```
</details>

<a id="file-appmodelsstockmovementitemphp"></a>
### app\Models\StockMovementItem.php
- SHA: `781655b4c501`  
- Ukuran: 695 B  
- Namespace: `App\Models`

**Class `StockMovementItem` extends `Model`**

Metode Publik:
- **stockMovement**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockMovementItem extends Model
{
    protected $fillable = [
        'stock_movement_id',
        'raw_material_id',
        'qty_in',
        'qty_out',
        'unit_cost',
        'notes',
    ];

    protected $casts = [
        'qty_in' => 'decimal:3',
        'qty_out' => 'decimal:3',
        'unit_cost' => 'decimal:2',
    ];

    public function stockMovement(): BelongsTo
    {
        return $this->belongsTo(StockMovement::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }
}

```
</details>

<a id="file-appmodelssupplierphp"></a>
### app\Models\Supplier.php
- SHA: `a92baf72f8df`  
- Ukuran: 586 B  
- Namespace: `App\Models`

**Class `Supplier` extends `Model`**

Metode Publik:
- **purchaseOrders**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'phone',
        'email',
        'address',
        'city',
        'contact_person',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function purchaseOrders(): HasMany
    {
        return $this->hasMany(PurchaseOrder::class);
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

<a id="file-appmodelsunitphp"></a>
### app\Models\Unit.php
- SHA: `ea8507b9ba00`  
- Ukuran: 766 B  
- Namespace: `App\Models`

**Class `Unit` extends `Model`**

Metode Publik:
- **rawMaterials**() : *HasMany*
- **fromConversions**() : *HasMany*
- **toConversions**() : *HasMany*
- **bomItems**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    public function rawMaterials(): HasMany
    {
        return $this->hasMany(RawMaterial::class);
    }

    public function fromConversions(): HasMany
    {
        return $this->hasMany(UnitConversion::class, 'from_unit_id');
    }

    public function toConversions(): HasMany
    {
        return $this->hasMany(UnitConversion::class, 'to_unit_id');
    }

    public function bomItems(): HasMany
    {
        return $this->hasMany(ProductBomItem::class);
    }
}

```
</details>

<a id="file-appmodelsunitconversionphp"></a>
### app\Models\UnitConversion.php
- SHA: `cfcda968cc69`  
- Ukuran: 693 B  
- Namespace: `App\Models`

**Class `UnitConversion` extends `Model`**

Metode Publik:
- **fromUnit**() : *BelongsTo*
- **toUnit**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UnitConversion extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_unit_id',
        'to_unit_id',
        'multiplier',
    ];

    protected function casts(): array
    {
        return [
            'multiplier' => 'decimal:6',
        ];
    }

    public function fromUnit(): BelongsTo
    {
        return $this->belongsTo(Unit::class, 'from_unit_id');
    }

    public function toUnit(): BelongsTo
    {
        return $this->belongsTo(Unit::class, 'to_unit_id');
    }
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

<a id="file-appmodelsvoucherphp"></a>
### app\Models\Voucher.php
- SHA: `616b81ddca02`  
- Ukuran: 892 B  
- Namespace: `App\Models`

**Class `Voucher` extends `Model`**
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'discount_type',
        'discount_value',
        'max_discount',
        'min_order_total',
        'quota',
        'used_count',
        'starts_at',
        'ends_at',
        'is_active',
        'applies_to',
    ];

    protected function casts(): array
    {
        return [
            'discount_value' => 'decimal:2',
            'max_discount' => 'decimal:2',
            'min_order_total' => 'decimal:2',
            'quota' => 'integer',
            'used_count' => 'integer',
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
            'is_active' => 'boolean',
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

<a id="file-appservicescustomercustomerservicephp"></a>
### app\Services\Customer\CustomerService.php
- SHA: `b780056a06ff`  
- Ukuran: 2 KB  
- Namespace: `App\Services\Customer`

**Class `CustomerService`**

Metode Publik:
- **create**(array $payload) : *Customer*
- **update**(Customer $customer, array $payload) : *Customer*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Customer;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CustomerService
{
    public function create(array $payload): Customer
    {
        return DB::transaction(function () use ($payload) {
            $addresses = $payload['addresses'] ?? [];
            unset($payload['addresses']);

            $customer = Customer::create($payload);

            $this->syncAddresses($customer, $addresses);

            return $customer->fresh()->load('addresses');
        });
    }

    public function update(Customer $customer, array $payload): Customer
    {
        return DB::transaction(function () use ($customer, $payload) {
            $hasAddresses = array_key_exists('addresses', $payload);
            $addresses = $payload['addresses'] ?? [];

            unset($payload['addresses']);

            $customer->update($payload);

            if ($hasAddresses) {
                $this->syncAddresses($customer, $addresses);
            }

            return $customer->fresh()->load('addresses');
        });
    }

    private function syncAddresses(Customer $customer, array $addresses): void
    {
        if (empty($addresses)) {
            $customer->addresses()->delete();
            return;
        }

        $defaultCount = collect($addresses)
            ->filter(fn ($item) => (bool) ($item['is_default'] ?? false))
            ->count();

        if ($defaultCount > 1) {
            throw ValidationException::withMessages([
                'addresses' => ['Hanya boleh ada satu alamat default.'],
            ]);
        }

        if ($defaultCount === 0) {
            $addresses[0]['is_default'] = true;
        }

        $customer->addresses()->delete();

        foreach ($addresses as $address) {
            $customer->addresses()->create([
                'label' => $address['label'] ?? null,
                'recipient_name' => $address['recipient_name'] ?? null,
                'recipient_phone' => $address['recipient_phone'] ?? null,
                'address' => $address['address'],
                'city' => $address['city'] ?? null,
                'province' => $address['province'] ?? null,
                'postal_code' => $address['postal_code'] ?? null,
                'latitude' => $address['latitude'] ?? null,
                'longitude' => $address['longitude'] ?? null,
                'is_default' => $address['is_default'] ?? false,
            ]);
        }
    }
}
```
</details>

<a id="file-appservicesinventoryoutletmaterialstockservicephp"></a>
### app\Services\Inventory\OutletMaterialStockService.php
- SHA: `812f1d318b70`  
- Ukuran: 713 B  
- Namespace: `App\Services\Inventory`

**Class `OutletMaterialStockService`**

Metode Publik:
- **upsert**(array $payload) : *OutletMaterialStock*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\OutletMaterialStock;

class OutletMaterialStockService
{
    public function upsert(array $payload): OutletMaterialStock
    {
        $stock = OutletMaterialStock::query()->updateOrCreate(
            [
                'outlet_id' => $payload['outlet_id'],
                'raw_material_id' => $payload['raw_material_id'],
            ],
            [
                'qty_on_hand' => $payload['qty_on_hand'] ?? 0,
                'qty_reserved' => $payload['qty_reserved'] ?? 0,
                'last_movement_at' => $payload['last_movement_at'] ?? null,
            ]
        );

        return $stock->fresh()->load(['outlet', 'rawMaterial']);
    }
}

```
</details>

<a id="file-appservicesinventoryproductbomservicephp"></a>
### app\Services\Inventory\ProductBomService.php
- SHA: `089edfab7fa5`  
- Ukuran: 2 KB  
- Namespace: `App\Services\Inventory`

**Class `ProductBomService`**

Metode Publik:
- **create**(array $payload) : *ProductBom*
- **update**(ProductBom $bom, array $payload) : *ProductBom*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\ProductBom;
use Illuminate\Support\Facades\DB;

class ProductBomService
{
    public function create(array $payload): ProductBom
    {
        return DB::transaction(function () use ($payload) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            if (($payload['is_active'] ?? true) === true) {
                ProductBom::query()
                    ->where('product_id', $payload['product_id'])
                    ->update(['is_active' => false]);
            }

            $bom = ProductBom::create($payload);

            foreach ($items as $item) {
                $bom->items()->create([
                    'raw_material_id' => $item['raw_material_id'],
                    'unit_id' => $item['unit_id'],
                    'qty' => $item['qty'],
                    'waste_percent' => $item['waste_percent'] ?? 0,
                ]);
            }

            return $bom->load(['product', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function update(ProductBom $bom, array $payload): ProductBom
    {
        return DB::transaction(function () use ($bom, $payload) {
            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $targetProductId = $payload['product_id'] ?? $bom->product_id;
            $targetIsActive = $payload['is_active'] ?? $bom->is_active;

            if ($targetIsActive) {
                ProductBom::query()
                    ->where('product_id', $targetProductId)
                    ->where('id', '!=', $bom->id)
                    ->update(['is_active' => false]);
            }

            $bom->update($payload);

            if (is_array($items)) {
                $bom->items()->delete();

                foreach ($items as $item) {
                    $bom->items()->create([
                        'raw_material_id' => $item['raw_material_id'],
                        'unit_id' => $item['unit_id'],
                        'qty' => $item['qty'],
                        'waste_percent' => $item['waste_percent'] ?? 0,
                    ]);
                }
            }

            return $bom->fresh()->load(['product', 'items.rawMaterial', 'items.unit']);
        });
    }
}

```
</details>

<a id="file-appservicesinventoryrawmaterialservicephp"></a>
### app\Services\Inventory\RawMaterialService.php
- SHA: `7c90905f3969`  
- Ukuran: 2 KB  
- Namespace: `App\Services\Inventory`

**Class `RawMaterialService`**

Metode Publik:
- **create**(array $payload) : *RawMaterial*
- **update**(RawMaterial $rawMaterial, array $payload) : *RawMaterial*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\RawMaterial;
use Illuminate\Support\Facades\DB;

class RawMaterialService
{
    public function create(array $payload): RawMaterial
    {
        return DB::transaction(function () use ($payload) {
            $stocks = $payload['outlet_stocks'] ?? [];
            unset($payload['outlet_stocks']);

            $rawMaterial = RawMaterial::create($payload);

            foreach ($stocks as $stock) {
                $rawMaterial->outletStocks()->create([
                    'outlet_id' => $stock['outlet_id'],
                    'qty_on_hand' => $stock['qty_on_hand'] ?? 0,
                    'qty_reserved' => $stock['qty_reserved'] ?? 0,
                    'last_movement_at' => $stock['last_movement_at'] ?? null,
                ]);
            }

            return $rawMaterial->load(['category', 'unit', 'outletStocks.outlet']);
        });
    }

    public function update(RawMaterial $rawMaterial, array $payload): RawMaterial
    {
        return DB::transaction(function () use ($rawMaterial, $payload) {
            $stocks = $payload['outlet_stocks'] ?? null;
            unset($payload['outlet_stocks']);

            $rawMaterial->update($payload);

            if (is_array($stocks)) {
                $rawMaterial->outletStocks()->delete();

                foreach ($stocks as $stock) {
                    $rawMaterial->outletStocks()->create([
                        'outlet_id' => $stock['outlet_id'],
                        'qty_on_hand' => $stock['qty_on_hand'] ?? 0,
                        'qty_reserved' => $stock['qty_reserved'] ?? 0,
                        'last_movement_at' => $stock['last_movement_at'] ?? null,
                    ]);
                }
            }

            return $rawMaterial->fresh()->load(['category', 'unit', 'outletStocks.outlet']);
        });
    }
}

```
</details>

<a id="file-appservicesinventoryunitconversionservicephp"></a>
### app\Services\Inventory\UnitConversionService.php
- SHA: `525119599429`  
- Ukuran: 415 B  
- Namespace: `App\Services\Inventory`

**Class `UnitConversionService`**

Metode Publik:
- **create**(array $payload) : *UnitConversion*
- **update**(UnitConversion $unitConversion, array $payload) : *UnitConversion*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\UnitConversion;

class UnitConversionService
{
    public function create(array $payload): UnitConversion
    {
        return UnitConversion::create($payload);
    }

    public function update(UnitConversion $unitConversion, array $payload): UnitConversion
    {
        $unitConversion->update($payload);

        return $unitConversion->fresh();
    }
}

```
</details>

<a id="file-appservicesinventoryunitservicephp"></a>
### app\Services\Inventory\UnitService.php
- SHA: `109d5f2b5a3f`  
- Ukuran: 325 B  
- Namespace: `App\Services\Inventory`

**Class `UnitService`**

Metode Publik:
- **create**(array $payload) : *Unit*
- **update**(Unit $unit, array $payload) : *Unit*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\Unit;

class UnitService
{
    public function create(array $payload): Unit
    {
        return Unit::create($payload);
    }

    public function update(Unit $unit, array $payload): Unit
    {
        $unit->update($payload);

        return $unit->fresh();
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

<a id="file-appservicespromotionpromotionservicephp"></a>
### app\Services\Promotion\PromotionService.php
- SHA: `627373daf397`  
- Ukuran: 3 KB  
- Namespace: `App\Services\Promotion`

**Class `PromotionService`**

Metode Publik:
- **create**(array $payload) : *Promotion*
- **update**(Promotion $promotion, array $payload) : *Promotion*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Promotion;

use App\Models\Promotion;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PromotionService
{
    public function create(array $payload): Promotion
    {
        return DB::transaction(function () use ($payload) {
            $rules = $payload['rules'] ?? [];
            unset($payload['rules']);

            $this->validateBusinessRules($payload);

            $promotion = Promotion::create([
                'name' => $payload['name'],
                'description' => $payload['description'] ?? null,
                'promotion_type' => $payload['promotion_type'],
                'starts_at' => $payload['starts_at'] ?? null,
                'ends_at' => $payload['ends_at'] ?? null,
                'priority' => $payload['priority'] ?? 0,
                'is_active' => $payload['is_active'] ?? true,
            ]);

            $this->syncRules($promotion, $rules);

            return $promotion->fresh()->load('rules');
        });
    }

    public function update(Promotion $promotion, array $payload): Promotion
    {
        return DB::transaction(function () use ($promotion, $payload) {
            $hasRules = array_key_exists('rules', $payload);
            $rules = $payload['rules'] ?? [];
            unset($payload['rules']);

            $merged = array_merge($promotion->toArray(), $payload);
            $this->validateBusinessRules($merged);

            $promotion->update($payload);

            if ($hasRules) {
                $this->syncRules($promotion, $rules);
            }

            return $promotion->fresh()->load('rules');
        });
    }

    private function syncRules(Promotion $promotion, array $rules): void
    {
        $promotion->rules()->delete();

        foreach ($rules as $rule) {
            $promotion->rules()->create([
                'rule_type' => $rule['rule_type'],
                'operator' => $rule['operator'] ?? null,
                'value' => is_array($rule['value'] ?? null)
                    ? json_encode($rule['value'], JSON_UNESCAPED_UNICODE)
                    : ($rule['value'] ?? null),
            ]);
        }
    }

    private function validateBusinessRules(array $payload): void
    {
        $startsAt = $payload['starts_at'] ?? null;
        $endsAt = $payload['ends_at'] ?? null;

        if ($startsAt && $endsAt && strtotime((string) $endsAt) < strtotime((string) $startsAt)) {
            throw ValidationException::withMessages([
                'ends_at' => ['ends_at tidak boleh lebih kecil dari starts_at.'],
            ]);
        }
    }
}
```
</details>

<a id="file-appservicespurchasinggoodsreceiptservicephp"></a>
### app\Services\Purchasing\GoodsReceiptService.php
- SHA: `0869e6f400b1`  
- Ukuran: 11 KB  
- Namespace: `App\Services\Purchasing`

**Class `GoodsReceiptService`**

Metode Publik:
- **create**(array $payload, ?int $userId = null) : *GoodsReceipt*
- **update**(GoodsReceipt $goodsReceipt, array $payload) : *GoodsReceipt*
- **post**(GoodsReceipt $goodsReceipt, int $userId) : *GoodsReceipt*
- **cancel**(GoodsReceipt $goodsReceipt) : *GoodsReceipt*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Purchasing;

use App\Models\GoodsReceipt;
use App\Models\OutletMaterialStock;
use App\Models\PurchaseOrder;
use App\Models\RawMaterial;
use App\Models\StockMovement;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class GoodsReceiptService
{
    public function create(array $payload, ?int $userId = null): GoodsReceipt
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            $purchaseOrder = PurchaseOrder::query()
                ->with(['items', 'goodsReceipts.items'])
                ->findOrFail($payload['purchase_order_id']);

            $this->ensureReceiptCanBeCreatedForPurchaseOrder($purchaseOrder, (int) $payload['outlet_id']);

            if (empty($payload['receipt_number'])) {
                $payload['receipt_number'] = $this->generateReceiptNumber((int) $payload['outlet_id']);
            }

            $payload['status'] = $payload['status'] ?? 'draft';
            $payload['received_by'] = $payload['received_by'] ?? $userId;

            $normalizedItems = $this->prepareReceiptItems($purchaseOrder, $items, null);

            $goodsReceipt = GoodsReceipt::create($payload);

            foreach ($normalizedItems as $item) {
                $goodsReceipt->items()->create($item);
            }

            return $goodsReceipt->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function update(GoodsReceipt $goodsReceipt, array $payload): GoodsReceipt
    {
        return DB::transaction(function () use ($goodsReceipt, $payload) {
            if ($goodsReceipt->status !== 'draft') {
                throw ValidationException::withMessages([
                    'status' => ['Hanya goods receipt draft yang bisa diubah.'],
                ]);
            }

            $items = $payload['items'] ?? null;
            unset($payload['items']);

            if (array_key_exists('purchase_order_id', $payload) || array_key_exists('outlet_id', $payload)) {
                $targetPurchaseOrderId = (int) ($payload['purchase_order_id'] ?? $goodsReceipt->purchase_order_id);
                $targetOutletId = (int) ($payload['outlet_id'] ?? $goodsReceipt->outlet_id);

                $purchaseOrder = PurchaseOrder::query()
                    ->with(['items', 'goodsReceipts.items'])
                    ->findOrFail($targetPurchaseOrderId);

                $this->ensureReceiptCanBeCreatedForPurchaseOrder($purchaseOrder, $targetOutletId);
            } else {
                $purchaseOrder = $goodsReceipt->purchaseOrder()->with(['items', 'goodsReceipts.items'])->firstOrFail();
            }

            if (empty($payload['receipt_number'] ?? null)) {
                unset($payload['receipt_number']);
            }

            $goodsReceipt->update($payload);

            if (is_array($items)) {
                $normalizedItems = $this->prepareReceiptItems($purchaseOrder, $items, $goodsReceipt);

                $goodsReceipt->items()->delete();

                foreach ($normalizedItems as $item) {
                    $goodsReceipt->items()->create($item);
                }
            }

            return $goodsReceipt->fresh()->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function post(GoodsReceipt $goodsReceipt, int $userId): GoodsReceipt
    {
        return DB::transaction(function () use ($goodsReceipt, $userId) {
            if ($goodsReceipt->status !== 'draft') {
                throw ValidationException::withMessages([
                    'status' => ['Hanya goods receipt draft yang bisa di-post.'],
                ]);
            }

            $goodsReceipt->loadMissing([
                'purchaseOrder.items',
                'purchaseOrder.goodsReceipts.items',
                'items.rawMaterial',
                'items.unit',
            ]);

            $this->prepareReceiptItems($goodsReceipt->purchaseOrder, $goodsReceipt->items->toArray(), $goodsReceipt);

            $movement = StockMovement::create([
                'outlet_id' => $goodsReceipt->outlet_id,
                'movement_type' => 'purchase',
                'reference_type' => GoodsReceipt::class,
                'reference_id' => $goodsReceipt->id,
                'movement_date' => $goodsReceipt->received_date,
                'notes' => $goodsReceipt->notes,
                'created_by' => $userId,
            ]);

            foreach ($goodsReceipt->items as $item) {
                $stock = OutletMaterialStock::query()->firstOrCreate(
                    [
                        'outlet_id' => $goodsReceipt->outlet_id,
                        'raw_material_id' => $item->raw_material_id,
                    ],
                    [
                        'qty_on_hand' => 0,
                        'qty_reserved' => 0,
                        'last_movement_at' => null,
                    ]
                );

                $stock->update([
                    'qty_on_hand' => (float) $stock->qty_on_hand + (float) $item->qty_received,
                    'last_movement_at' => $goodsReceipt->received_date,
                ]);

                RawMaterial::query()
                    ->whereKey($item->raw_material_id)
                    ->update([
                        'last_purchase_price' => $item->unit_cost,
                    ]);

                $movement->items()->create([
                    'raw_material_id' => $item->raw_material_id,
                    'qty_in' => $item->qty_received,
                    'qty_out' => 0,
                    'unit_cost' => $item->unit_cost,
                    'notes' => $item->notes,
                ]);
            }

            $goodsReceipt->update([
                'status' => 'posted',
                'received_by' => $goodsReceipt->received_by ?: $userId,
            ]);

            $this->refreshPurchaseOrderStatus($goodsReceipt->purchaseOrder()->with(['items', 'goodsReceipts.items'])->firstOrFail());

            return $goodsReceipt->fresh()->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function cancel(GoodsReceipt $goodsReceipt): GoodsReceipt
    {
        if ($goodsReceipt->status === 'posted') {
            throw ValidationException::withMessages([
                'status' => ['Goods receipt yang sudah dipost tidak bisa dibatalkan lewat endpoint ini.'],
            ]);
        }

        $goodsReceipt->update([
            'status' => 'cancelled',
        ]);

        $this->refreshPurchaseOrderStatus($goodsReceipt->purchaseOrder()->with(['items', 'goodsReceipts.items'])->firstOrFail());

        return $goodsReceipt->fresh()->load([
            'purchaseOrder.supplier',
            'outlet',
            'receiver',
            'items.rawMaterial',
            'items.unit',
        ]);
    }

    private function ensureReceiptCanBeCreatedForPurchaseOrder(PurchaseOrder $purchaseOrder, int $outletId): void
    {
        if (!in_array($purchaseOrder->status, ['approved', 'partial_received'], true)) {
            throw ValidationException::withMessages([
                'purchase_order_id' => ['Goods receipt hanya bisa dibuat dari purchase order yang approved atau partial_received.'],
            ]);
        }

        if ((int) $purchaseOrder->outlet_id !== $outletId) {
            throw ValidationException::withMessages([
                'outlet_id' => ['Outlet goods receipt harus sama dengan outlet purchase order.'],
            ]);
        }
    }

    private function prepareReceiptItems(PurchaseOrder $purchaseOrder, array $items, ?GoodsReceipt $currentReceipt = null): array
    {
        $poItemsByMaterial = $purchaseOrder->items->keyBy('raw_material_id');
        $alreadyReceivedMap = $this->getAlreadyReceivedMap($purchaseOrder, $currentReceipt);

        $normalizedItems = [];

        foreach ($items as $item) {
            $rawMaterialId = (int) $item['raw_material_id'];

            if (!isset($poItemsByMaterial[$rawMaterialId])) {
                throw ValidationException::withMessages([
                    'items' => ["Raw material ID {$rawMaterialId} tidak ada di purchase order."],
                ]);
            }

            $poItem = $poItemsByMaterial[$rawMaterialId];
            $newQty = (float) $item['qty_received'];
            $alreadyReceived = (float) ($alreadyReceivedMap[$rawMaterialId] ?? 0);
            $allowedMax = (float) $poItem->qty_ordered - $alreadyReceived;

            if ($newQty > $allowedMax) {
                throw ValidationException::withMessages([
                    'items' => ["Qty received untuk raw material ID {$rawMaterialId} melebihi sisa qty order."],
                ]);
            }

            $lineTotal = (float) $item['unit_cost'] * $newQty;

            $normalizedItems[] = [
                'raw_material_id' => $rawMaterialId,
                'unit_id' => $item['unit_id'],
                'qty_received' => $newQty,
                'unit_cost' => $item['unit_cost'],
                'line_total' => $lineTotal,
                'expired_at' => $item['expired_at'] ?? null,
                'notes' => $item['notes'] ?? null,
            ];
        }

        return $normalizedItems;
    }

    private function getAlreadyReceivedMap(PurchaseOrder $purchaseOrder, ?GoodsReceipt $currentReceipt = null): array
    {
        $map = [];

        $receipts = $purchaseOrder->goodsReceipts
            ->where('status', 'posted')
            ->when($currentReceipt !== null, fn (Collection $collection) => $collection->where('id', '!=', $currentReceipt->id));

        foreach ($receipts as $receipt) {
            foreach ($receipt->items as $item) {
                $map[$item->raw_material_id] = (float) ($map[$item->raw_material_id] ?? 0) + (float) $item->qty_received;
            }
        }

        return $map;
    }

    private function refreshPurchaseOrderStatus(PurchaseOrder $purchaseOrder): void
    {
        if ($purchaseOrder->status === 'cancelled') {
            return;
        }

        $receivedMap = $this->getAlreadyReceivedMap($purchaseOrder, null);

        $allReceived = true;
        $hasAnyReceived = false;

        foreach ($purchaseOrder->items as $item) {
            $receivedQty = (float) ($receivedMap[$item->raw_material_id] ?? 0);

            if ($receivedQty > 0) {
                $hasAnyReceived = true;
            }

            if ($receivedQty < (float) $item->qty_ordered) {
                $allReceived = false;
            }
        }

        $newStatus = 'approved';

        if ($allReceived && $hasAnyReceived) {
            $newStatus = 'received';
        } elseif ($hasAnyReceived) {
            $newStatus = 'partial_received';
        }

        $purchaseOrder->update([
            'status' => $newStatus,
        ]);
    }

    private function generateReceiptNumber(int $outletId): string
    {
        $date = now()->format('Ymd');
        $latestId = (GoodsReceipt::max('id') ?? 0) + 1;

        return sprintf('GR-%d-%s-%04d', $outletId, $date, $latestId);
    }
}

```
</details>

<a id="file-appservicespurchasingpurchaseorderservicephp"></a>
### app\Services\Purchasing\PurchaseOrderService.php
- SHA: `ecc77e2d67bd`  
- Ukuran: 6 KB  
- Namespace: `App\Services\Purchasing`

**Class `PurchaseOrderService`**

Metode Publik:
- **create**(array $payload, ?int $userId = null) : *PurchaseOrder*
- **update**(PurchaseOrder $purchaseOrder, array $payload) : *PurchaseOrder*
- **approve**(PurchaseOrder $purchaseOrder, int $userId) : *PurchaseOrder*
- **cancel**(PurchaseOrder $purchaseOrder) : *PurchaseOrder*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Purchasing;

use App\Models\PurchaseOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PurchaseOrderService
{
    public function create(array $payload, ?int $userId = null): PurchaseOrder
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            $payload['status'] = $payload['status'] ?? 'draft';
            $payload['created_by'] = $userId;

            if (empty($payload['po_number'])) {
                $payload['po_number'] = $this->generatePoNumber($payload['outlet_id']);
            }

            [$subtotal, $discountAmount, $taxAmount, $totalAmount, $normalizedItems] = $this->prepareItemsAndTotals(
                items: $items,
                discountAmount: (float) ($payload['discount_amount'] ?? 0),
                taxAmount: (float) ($payload['tax_amount'] ?? 0),
            );

            $payload['subtotal'] = $subtotal;
            $payload['discount_amount'] = $discountAmount;
            $payload['tax_amount'] = $taxAmount;
            $payload['total_amount'] = $totalAmount;

            $purchaseOrder = PurchaseOrder::create($payload);

            foreach ($normalizedItems as $item) {
                $purchaseOrder->items()->create($item);
            }

            if ($purchaseOrder->status === 'approved') {
                $purchaseOrder->update([
                    'approved_by' => $userId,
                    'approved_at' => now(),
                ]);
            }

            return $purchaseOrder->load([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function update(PurchaseOrder $purchaseOrder, array $payload): PurchaseOrder
    {
        return DB::transaction(function () use ($purchaseOrder, $payload) {
            if (in_array($purchaseOrder->status, ['partial_received', 'received', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'status' => ['Purchase order dengan status ini tidak bisa diubah.'],
                ]);
            }

            $items = $payload['items'] ?? null;
            unset($payload['items']);

            if (empty($payload['po_number'] ?? null)) {
                unset($payload['po_number']);
            }

            if (is_array($items)) {
                [$subtotal, $discountAmount, $taxAmount, $totalAmount, $normalizedItems] = $this->prepareItemsAndTotals(
                    items: $items,
                    discountAmount: (float) ($payload['discount_amount'] ?? $purchaseOrder->discount_amount),
                    taxAmount: (float) ($payload['tax_amount'] ?? $purchaseOrder->tax_amount),
                );

                $payload['subtotal'] = $subtotal;
                $payload['discount_amount'] = $discountAmount;
                $payload['tax_amount'] = $taxAmount;
                $payload['total_amount'] = $totalAmount;
            }

            $purchaseOrder->update($payload);

            if (is_array($items)) {
                $purchaseOrder->items()->delete();

                foreach ($normalizedItems as $item) {
                    $purchaseOrder->items()->create($item);
                }
            }

            return $purchaseOrder->fresh()->load([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function approve(PurchaseOrder $purchaseOrder, int $userId): PurchaseOrder
    {
        if ($purchaseOrder->status !== 'draft') {
            throw ValidationException::withMessages([
                'status' => ['Hanya purchase order draft yang bisa di-approve.'],
            ]);
        }

        $purchaseOrder->update([
            'status' => 'approved',
            'approved_by' => $userId,
            'approved_at' => now(),
        ]);

        return $purchaseOrder->fresh()->load([
            'outlet',
            'supplier',
            'approver',
            'creator',
            'items.rawMaterial',
            'items.unit',
        ]);
    }

    public function cancel(PurchaseOrder $purchaseOrder): PurchaseOrder
    {
        if (in_array($purchaseOrder->status, ['received', 'cancelled'], true)) {
            throw ValidationException::withMessages([
                'status' => ['Purchase order dengan status ini tidak bisa dibatalkan.'],
            ]);
        }

        $purchaseOrder->update([
            'status' => 'cancelled',
        ]);

        return $purchaseOrder->fresh()->load([
            'outlet',
            'supplier',
            'approver',
            'creator',
            'items.rawMaterial',
            'items.unit',
        ]);
    }

    private function prepareItemsAndTotals(array $items, float $discountAmount, float $taxAmount): array
    {
        $normalizedItems = [];
        $subtotal = 0;

        foreach ($items as $item) {
            $lineTotal = ((float) $item['qty_ordered'] * (float) $item['unit_price']) - (float) ($item['discount_amount'] ?? 0);

            $normalizedItems[] = [
                'raw_material_id' => $item['raw_material_id'],
                'unit_id' => $item['unit_id'],
                'qty_ordered' => $item['qty_ordered'],
                'unit_price' => $item['unit_price'],
                'discount_amount' => $item['discount_amount'] ?? 0,
                'line_total' => $lineTotal,
                'notes' => $item['notes'] ?? null,
            ];

            $subtotal += $lineTotal;
        }

        $totalAmount = $subtotal - $discountAmount + $taxAmount;

        return [$subtotal, $discountAmount, $taxAmount, $totalAmount, $normalizedItems];
    }

    private function generatePoNumber(int $outletId): string
    {
        $date = now()->format('Ymd');
        $latestId = (PurchaseOrder::max('id') ?? 0) + 1;

        return sprintf('PO-%d-%s-%04d', $outletId, $date, $latestId);
    }
}

```
</details>

<a id="file-appservicespurchasingsupplierservicephp"></a>
### app\Services\Purchasing\SupplierService.php
- SHA: `887277ef4226`  
- Ukuran: 362 B  
- Namespace: `App\Services\Purchasing`

**Class `SupplierService`**

Metode Publik:
- **create**(array $payload) : *Supplier*
- **update**(Supplier $supplier, array $payload) : *Supplier*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Purchasing;

use App\Models\Supplier;

class SupplierService
{
    public function create(array $payload): Supplier
    {
        return Supplier::create($payload);
    }

    public function update(Supplier $supplier, array $payload): Supplier
    {
        $supplier->update($payload);

        return $supplier->fresh();
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

<a id="file-appservicesvouchervoucherservicephp"></a>
### app\Services\Voucher\VoucherService.php
- SHA: `1239bcad1326`  
- Ukuran: 2 KB  
- Namespace: `App\Services\Voucher`

**Class `VoucherService`**

Metode Publik:
- **create**(array $payload) : *Voucher*
- **update**(Voucher $voucher, array $payload) : *Voucher*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Voucher;

use App\Models\Voucher;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class VoucherService
{
    public function create(array $payload): Voucher
    {
        return DB::transaction(function () use ($payload) {
            $this->validateBusinessRules($payload);

            return Voucher::create([
                'code' => strtoupper($payload['code']),
                'name' => $payload['name'],
                'description' => $payload['description'] ?? null,
                'discount_type' => $payload['discount_type'],
                'discount_value' => $payload['discount_value'],
                'max_discount' => $payload['max_discount'] ?? null,
                'min_order_total' => $payload['min_order_total'] ?? 0,
                'quota' => $payload['quota'] ?? null,
                'used_count' => $payload['used_count'] ?? 0,
                'starts_at' => $payload['starts_at'] ?? null,
                'ends_at' => $payload['ends_at'] ?? null,
                'is_active' => $payload['is_active'] ?? true,
                'applies_to' => $payload['applies_to'],
            ]);
        });
    }

    public function update(Voucher $voucher, array $payload): Voucher
    {
        return DB::transaction(function () use ($voucher, $payload) {
            $merged = array_merge($voucher->toArray(), $payload);

            $this->validateBusinessRules($merged);

            if (array_key_exists('code', $payload)) {
                $payload['code'] = strtoupper($payload['code']);
            }

            $voucher->update($payload);

            return $voucher->fresh();
        });
    }

    private function validateBusinessRules(array $payload): void
    {
        if (($payload['discount_type'] ?? null) === 'percent' && (float) ($payload['discount_value'] ?? 0) > 100) {
            throw ValidationException::withMessages([
                'discount_value' => ['Voucher persen tidak boleh lebih dari 100.'],
            ]);
        }

        $startsAt = $payload['starts_at'] ?? null;
        $endsAt = $payload['ends_at'] ?? null;

        if ($startsAt && $endsAt && strtotime((string) $endsAt) < strtotime((string) $startsAt)) {
            throw ValidationException::withMessages([
                'ends_at' => ['ends_at tidak boleh lebih kecil dari starts_at.'],
            ]);
        }
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
- SHA: `941002ac92d0`  
- Ukuran: 3 KB  
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

            'customers.view',
            'customers.create',
            'customers.update',
            'customers.delete',

            'vouchers.view',
            'vouchers.create',
            'vouchers.update',
            'vouchers.delete',

            'promotions.view',
            'promotions.create',
            'promotions.update',
            'promotions.delete',

            'units.view',
            'units.create',
            'units.update',
            'units.delete',

            'unit_conversions.view',
            'unit_conversions.create',
            'unit_conversions.update',
            'unit_conversions.delete',

            'raw_material_categories.view',
            'raw_material_categories.create',
            'raw_material_categories.update',
            'raw_material_categories.delete',

            'raw_materials.view',
            'raw_materials.create',
            'raw_materials.update',
            'raw_materials.delete',

            'outlet_material_stocks.view',
            'outlet_material_stocks.update',

            'product_boms.view',
            'product_boms.create',
            'product_boms.update',
            'product_boms.delete',

            'suppliers.view',
            'suppliers.create',
            'suppliers.update',
            'suppliers.delete',

            'purchase_orders.view',
            'purchase_orders.create',
            'purchase_orders.update',
            'purchase_orders.delete',
            'purchase_orders.approve',
            'purchase_orders.cancel',

            'goods_receipts.view',
            'goods_receipts.create',
            'goods_receipts.update',
            'goods_receipts.delete',
            'goods_receipts.post',
            'goods_receipts.cancel',
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
- SHA: `d0a429761eb4`  
- Ukuran: 5 KB  
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
        $superadmin  = Role::findOrCreate('superadmin', 'sanctum');
        $adminPusat  = Role::findOrCreate('admin_pusat', 'sanctum');
        $adminOutlet = Role::findOrCreate('admin_outlet', 'sanctum');
        $owner       = Role::findOrCreate('owner', 'sanctum');

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
            'customers.view',
            'customers.create',
            'customers.update',
            'customers.delete',
            'vouchers.view',
            'vouchers.create',
            'vouchers.update',
            'vouchers.delete',
            'promotions.view',
            'promotions.create',
            'promotions.update',
            'promotions.delete',
            'units.view',
            'units.create',
            'units.update',
            'units.delete',

            'unit_conversions.view',
            'unit_conversions.create',
            'unit_conversions.update',
            'unit_conversions.delete',

            'raw_material_categories.view',
            'raw_material_categories.create',
            'raw_material_categories.update',
            'raw_material_categories.delete',

            'raw_materials.view',
            'raw_materials.create',
            'raw_materials.update',
            'raw_materials.delete',

            'outlet_material_stocks.view',
            'outlet_material_stocks.update',

            'product_boms.view',
            'product_boms.create',
            'product_boms.update',
            'product_boms.delete',

            'suppliers.view',
            'suppliers.create',
            'suppliers.update',
            'suppliers.delete',

            'purchase_orders.view',
            'purchase_orders.create',
            'purchase_orders.update',
            'purchase_orders.delete',
            'purchase_orders.approve',
            'purchase_orders.cancel',

            'goods_receipts.view',
            'goods_receipts.create',
            'goods_receipts.update',
            'goods_receipts.delete',
            'goods_receipts.post',
            'goods_receipts.cancel',
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
            'customers.view',
            'customers.create',
            'customers.update',
            'vouchers.view',
            'promotions.view',

            'suppliers.view',

            'purchase_orders.view',
            'purchase_orders.create',
            'purchase_orders.update',

            'goods_receipts.view',
            'goods_receipts.create',
            'goods_receipts.update',
            'goods_receipts.post',
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
            'customers.view',
            'vouchers.view',
            'promotions.view',
            'suppliers.view',
            'purchase_orders.view',
            'goods_receipts.view',
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
- SHA: `70b299a180d6`  
- Ukuran: 10 KB  
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
| GET | `/customers` | `CustomerController` | `index` |
| POST | `/customers` | `CustomerController` | `store` |
| GET | `/customers/{customer}` | `CustomerController` | `show` |
| PUT | `/customers/{customer}` | `CustomerController` | `update` |
| DELETE | `/customers/{customer}` | `CustomerController` | `destroy` |
| GET | `/vouchers` | `VoucherController` | `index` |
| POST | `/vouchers` | `VoucherController` | `store` |
| GET | `/vouchers/{voucher}` | `VoucherController` | `show` |
| PUT | `/vouchers/{voucher}` | `VoucherController` | `update` |
| DELETE | `/vouchers/{voucher}` | `VoucherController` | `destroy` |
| GET | `/promotions` | `PromotionController` | `index` |
| POST | `/promotions` | `PromotionController` | `store` |
| GET | `/promotions/{promotion}` | `PromotionController` | `show` |
| PUT | `/promotions/{promotion}` | `PromotionController` | `update` |
| DELETE | `/promotions/{promotion}` | `PromotionController` | `destroy` |
| GET | `/units` | `UnitController` | `index` |
| POST | `/units` | `UnitController` | `store` |
| GET | `/units/{unit}` | `UnitController` | `show` |
| PUT | `/units/{unit}` | `UnitController` | `update` |
| DELETE | `/units/{unit}` | `UnitController` | `destroy` |
| GET | `/unit-conversions` | `UnitConversionController` | `index` |
| POST | `/unit-conversions` | `UnitConversionController` | `store` |
| GET | `/unit-conversions/{unitConversion}` | `UnitConversionController` | `show` |
| PUT | `/unit-conversions/{unitConversion}` | `UnitConversionController` | `update` |
| DELETE | `/unit-conversions/{unitConversion}` | `UnitConversionController` | `destroy` |
| GET | `/raw-material-categories` | `RawMaterialCategoryController` | `index` |
| POST | `/raw-material-categories` | `RawMaterialCategoryController` | `store` |
| GET | `/raw-material-categories/{rawMaterialCategory}` | `RawMaterialCategoryController` | `show` |
| PUT | `/raw-material-categories/{rawMaterialCategory}` | `RawMaterialCategoryController` | `update` |
| DELETE | `/raw-material-categories/{rawMaterialCategory}` | `RawMaterialCategoryController` | `destroy` |
| GET | `/raw-materials` | `RawMaterialController` | `index` |
| POST | `/raw-materials` | `RawMaterialController` | `store` |
| GET | `/raw-materials/{rawMaterial}` | `RawMaterialController` | `show` |
| PUT | `/raw-materials/{rawMaterial}` | `RawMaterialController` | `update` |
| DELETE | `/raw-materials/{rawMaterial}` | `RawMaterialController` | `destroy` |
| GET | `/outlet-material-stocks` | `OutletMaterialStockController` | `index` |
| POST | `/outlet-material-stocks/upsert` | `OutletMaterialStockController` | `upsert` |
| GET | `/outlet-material-stocks/{outletMaterialStock}` | `OutletMaterialStockController` | `show` |
| GET | `/product-boms` | `ProductBomController` | `index` |
| POST | `/product-boms` | `ProductBomController` | `store` |
| GET | `/product-boms/{productBom}` | `ProductBomController` | `show` |
| PUT | `/product-boms/{productBom}` | `ProductBomController` | `update` |
| DELETE | `/product-boms/{productBom}` | `ProductBomController` | `destroy` |
| GET | `/suppliers` | `SupplierController` | `index` |
| POST | `/suppliers` | `SupplierController` | `store` |
| GET | `/suppliers/{supplier}` | `SupplierController` | `show` |
| PUT | `/suppliers/{supplier}` | `SupplierController` | `update` |
| DELETE | `/suppliers/{supplier}` | `SupplierController` | `destroy` |
| GET | `/purchase-orders` | `PurchaseOrderController` | `index` |
| POST | `/purchase-orders` | `PurchaseOrderController` | `store` |
| GET | `/purchase-orders/{purchaseOrder}` | `PurchaseOrderController` | `show` |
| PUT | `/purchase-orders/{purchaseOrder}` | `PurchaseOrderController` | `update` |
| DELETE | `/purchase-orders/{purchaseOrder}` | `PurchaseOrderController` | `destroy` |
| POST | `/purchase-orders/{purchaseOrder}/approve` | `PurchaseOrderController` | `approve` |
| POST | `/purchase-orders/{purchaseOrder}/cancel` | `PurchaseOrderController` | `cancel` |
| GET | `/goods-receipts` | `GoodsReceiptController` | `index` |
| POST | `/goods-receipts` | `GoodsReceiptController` | `store` |
| GET | `/goods-receipts/{goodsReceipt}` | `GoodsReceiptController` | `show` |
| PUT | `/goods-receipts/{goodsReceipt}` | `GoodsReceiptController` | `update` |
| DELETE | `/goods-receipts/{goodsReceipt}` | `GoodsReceiptController` | `destroy` |
| POST | `/goods-receipts/{goodsReceipt}/post` | `GoodsReceiptController` | `post` |
| POST | `/goods-receipts/{goodsReceipt}/cancel` | `GoodsReceiptController` | `cancel` |
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\GoodsReceiptController;
use App\Http\Controllers\Api\OutletController;
use App\Http\Controllers\Api\OutletMaterialStockController;
use App\Http\Controllers\Api\OutletSettingController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\ProductBomController;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PromotionController;
use App\Http\Controllers\Api\PurchaseOrderController;
use App\Http\Controllers\Api\RawMaterialCategoryController;
use App\Http\Controllers\Api\RawMaterialController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\SystemSettingController;
use App\Http\Controllers\Api\UnitController;
use App\Http\Controllers\Api\UnitConversionController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VoucherController;
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

        Route::get('/customers', [CustomerController::class, 'index']);
        Route::post('/customers', [CustomerController::class, 'store']);
        Route::get('/customers/{customer}', [CustomerController::class, 'show']);
        Route::put('/customers/{customer}', [CustomerController::class, 'update']);
        Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);

        Route::get('/vouchers', [VoucherController::class, 'index']);
        Route::post('/vouchers', [VoucherController::class, 'store']);
        Route::get('/vouchers/{voucher}', [VoucherController::class, 'show']);
        Route::put('/vouchers/{voucher}', [VoucherController::class, 'update']);
        Route::delete('/vouchers/{voucher}', [VoucherController::class, 'destroy']);

        Route::get('/promotions', [PromotionController::class, 'index']);
        Route::post('/promotions', [PromotionController::class, 'store']);
        Route::get('/promotions/{promotion}', [PromotionController::class, 'show']);
        Route::put('/promotions/{promotion}', [PromotionController::class, 'update']);
        Route::delete('/promotions/{promotion}', [PromotionController::class, 'destroy']);

        Route::get('/units', [UnitController::class, 'index']);
        Route::post('/units', [UnitController::class, 'store']);
        Route::get('/units/{unit}', [UnitController::class, 'show']);
        Route::put('/units/{unit}', [UnitController::class, 'update']);
        Route::delete('/units/{unit}', [UnitController::class, 'destroy']);

        Route::get('/unit-conversions', [UnitConversionController::class, 'index']);
        Route::post('/unit-conversions', [UnitConversionController::class, 'store']);
        Route::get('/unit-conversions/{unitConversion}', [UnitConversionController::class, 'show']);
        Route::put('/unit-conversions/{unitConversion}', [UnitConversionController::class, 'update']);
        Route::delete('/unit-conversions/{unitConversion}', [UnitConversionController::class, 'destroy']);

        Route::get('/raw-material-categories', [RawMaterialCategoryController::class, 'index']);
        Route::post('/raw-material-categories', [RawMaterialCategoryController::class, 'store']);
        Route::get('/raw-material-categories/{rawMaterialCategory}', [RawMaterialCategoryController::class, 'show']);
        Route::put('/raw-material-categories/{rawMaterialCategory}', [RawMaterialCategoryController::class, 'update']);
        Route::delete('/raw-material-categories/{rawMaterialCategory}', [RawMaterialCategoryController::class, 'destroy']);

        Route::get('/raw-materials', [RawMaterialController::class, 'index']);
        Route::post('/raw-materials', [RawMaterialController::class, 'store']);
        Route::get('/raw-materials/{rawMaterial}', [RawMaterialController::class, 'show']);
        Route::put('/raw-materials/{rawMaterial}', [RawMaterialController::class, 'update']);
        Route::delete('/raw-materials/{rawMaterial}', [RawMaterialController::class, 'destroy']);

        Route::get('/outlet-material-stocks', [OutletMaterialStockController::class, 'index']);
        Route::post('/outlet-material-stocks/upsert', [OutletMaterialStockController::class, 'upsert']);
        Route::get('/outlet-material-stocks/{outletMaterialStock}', [OutletMaterialStockController::class, 'show']);

        Route::get('/product-boms', [ProductBomController::class, 'index']);
        Route::post('/product-boms', [ProductBomController::class, 'store']);
        Route::get('/product-boms/{productBom}', [ProductBomController::class, 'show']);
        Route::put('/product-boms/{productBom}', [ProductBomController::class, 'update']);
        Route::delete('/product-boms/{productBom}', [ProductBomController::class, 'destroy']);

        Route::get('/suppliers', [SupplierController::class, 'index']);
        Route::post('/suppliers', [SupplierController::class, 'store']);
        Route::get('/suppliers/{supplier}', [SupplierController::class, 'show']);
        Route::put('/suppliers/{supplier}', [SupplierController::class, 'update']);
        Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy']);

        Route::get('/purchase-orders', [PurchaseOrderController::class, 'index']);
        Route::post('/purchase-orders', [PurchaseOrderController::class, 'store']);
        Route::get('/purchase-orders/{purchaseOrder}', [PurchaseOrderController::class, 'show']);
        Route::put('/purchase-orders/{purchaseOrder}', [PurchaseOrderController::class, 'update']);
        Route::delete('/purchase-orders/{purchaseOrder}', [PurchaseOrderController::class, 'destroy']);
        Route::post('/purchase-orders/{purchaseOrder}/approve', [PurchaseOrderController::class, 'approve']);
        Route::post('/purchase-orders/{purchaseOrder}/cancel', [PurchaseOrderController::class, 'cancel']);

        Route::get('/goods-receipts', [GoodsReceiptController::class, 'index']);
        Route::post('/goods-receipts', [GoodsReceiptController::class, 'store']);
        Route::get('/goods-receipts/{goodsReceipt}', [GoodsReceiptController::class, 'show']);
        Route::put('/goods-receipts/{goodsReceipt}', [GoodsReceiptController::class, 'update']);
        Route::delete('/goods-receipts/{goodsReceipt}', [GoodsReceiptController::class, 'destroy']);
        Route::post('/goods-receipts/{goodsReceipt}/post', [GoodsReceiptController::class, 'post']);
        Route::post('/goods-receipts/{goodsReceipt}/cancel', [GoodsReceiptController::class, 'cancel']);
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
