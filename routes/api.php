<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\GoodsReceiptController;
use App\Http\Controllers\Api\OrderController;
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
use App\Http\Controllers\Api\StockAdjustmentController;
use App\Http\Controllers\Api\StockMovementController;
use App\Http\Controllers\Api\StockOpnameController;
use App\Http\Controllers\Api\StockTransferController;
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
        Route::put('/outlets/{outlet}/settings', [OutletSettingController::class, 'update']);

        Route::get('/system-settings', [SystemSettingController::class, 'index']);
        Route::post('/system-settings/upsert', [SystemSettingController::class, 'upsert']);

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

        Route::get('/stock-movements', [StockMovementController::class, 'index']);
        Route::get('/stock-movements/{stockMovement}', [StockMovementController::class, 'show']);

        Route::get('/stock-adjustments', [StockAdjustmentController::class, 'index']);
        Route::post('/stock-adjustments', [StockAdjustmentController::class, 'store']);
        Route::get('/stock-adjustments/{stockAdjustment}', [StockAdjustmentController::class, 'show']);
        Route::put('/stock-adjustments/{stockAdjustment}', [StockAdjustmentController::class, 'update']);
        Route::delete('/stock-adjustments/{stockAdjustment}', [StockAdjustmentController::class, 'destroy']);

        Route::get('/stock-transfers', [StockTransferController::class, 'index']);
        Route::post('/stock-transfers', [StockTransferController::class, 'store']);
        Route::get('/stock-transfers/{stockTransfer}', [StockTransferController::class, 'show']);
        Route::put('/stock-transfers/{stockTransfer}', [StockTransferController::class, 'update']);
        Route::delete('/stock-transfers/{stockTransfer}', [StockTransferController::class, 'destroy']);
        Route::post('/stock-transfers/{stockTransfer}/send', [StockTransferController::class, 'send']);
        Route::post('/stock-transfers/{stockTransfer}/receive', [StockTransferController::class, 'receive']);
        Route::post('/stock-transfers/{stockTransfer}/cancel', [StockTransferController::class, 'cancel']);

        Route::get('/stock-opnames', [StockOpnameController::class, 'index']);
        Route::post('/stock-opnames', [StockOpnameController::class, 'store']);
        Route::get('/stock-opnames/{stockOpname}', [StockOpnameController::class, 'show']);
        Route::put('/stock-opnames/{stockOpname}', [StockOpnameController::class, 'update']);
        Route::delete('/stock-opnames/{stockOpname}', [StockOpnameController::class, 'destroy']);
        Route::post('/stock-opnames/{stockOpname}/post', [StockOpnameController::class, 'post']);
        Route::post('/stock-opnames/{stockOpname}/cancel', [StockOpnameController::class, 'cancel']);

        Route::get('/orders', [OrderController::class, 'index']);
        Route::post('/orders', [OrderController::class, 'store']);
        Route::get('/orders/{order}', [OrderController::class, 'show']);
        Route::put('/orders/{order}', [OrderController::class, 'update']);
        Route::delete('/orders/{order}', [OrderController::class, 'destroy']);
        Route::post('/orders/{order}/confirm', [OrderController::class, 'confirm']);
        Route::post('/orders/{order}/complete', [OrderController::class, 'complete']);
        Route::post('/orders/{order}/cancel', [OrderController::class, 'cancel']);
    });
});
