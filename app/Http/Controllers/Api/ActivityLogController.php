<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Audit\ActivityLogFilterRequest;
use App\Http\Resources\ActivityLogResource;
use App\Models\ActivityLog;
use App\Services\Audit\ActivityLogService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function __construct(
        private readonly ActivityLogService $activityLogService
    ) {
    }

    public function index(ActivityLogFilterRequest $request): JsonResponse
    {
        $rows = $this->activityLogService->paginate($request->validated());

        return response()->json([
            'message' => 'Daftar activity log berhasil diambil.',
            'data' => ActivityLogResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function show(Request $request, ActivityLog $activityLog): JsonResponse
    {
        abort_unless($request->user()->can('activity_logs.view'), 403);

        return response()->json([
            'message' => 'Detail activity log berhasil diambil.',
            'data' => new ActivityLogResource($activityLog->load(['user', 'outlet'])),
        ]);
    }
}
