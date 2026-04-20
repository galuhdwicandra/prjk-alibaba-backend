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