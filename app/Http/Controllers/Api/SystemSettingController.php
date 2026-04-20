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