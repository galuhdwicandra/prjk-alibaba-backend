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