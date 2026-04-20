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
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\VoucherController;
use App\Http\Controllers\Api\PromotionController;
use App\Http\Controllers\Api\OutletMaterialStockController;
use App\Http\Controllers\Api\ProductBomController;
use App\Http\Controllers\Api\RawMaterialCategoryController;
use App\Http\Controllers\Api\RawMaterialController;
use App\Http\Controllers\Api\UnitController;
use App\Http\Controllers\Api\UnitConversionController;

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
    });
});
