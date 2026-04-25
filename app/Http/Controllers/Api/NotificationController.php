<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Notification\ScanAlertRequest;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use App\Services\Notification\NotificationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct(
        private readonly NotificationService $notificationService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('notifications.view'), 403);

        $rows = $this->notificationService->paginate($request->all());

        return response()->json([
            'message' => 'Daftar notification berhasil diambil.',
            'data' => NotificationResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function show(Request $request, Notification $notification): JsonResponse
    {
        abort_unless($request->user()->can('notifications.view'), 403);

        return response()->json([
            'message' => 'Detail notification berhasil diambil.',
            'data' => new NotificationResource($notification->load([
                'outlet',
                'user',
                'logs.alertRule',
                'logs.user',
            ])),
        ]);
    }

    public function markAsRead(Request $request, Notification $notification): JsonResponse
    {
        abort_unless($request->user()->can('notifications.update'), 403);

        $row = $this->notificationService->markAsRead(
            notification: $notification,
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Notification berhasil ditandai sudah dibaca.',
            'data' => new NotificationResource($row),
        ]);
    }

    public function markAllAsRead(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('notifications.update'), 403);

        $count = $this->notificationService->markAllAsRead(
            outletId: $request->filled('outlet_id') ? (int) $request->input('outlet_id') : null,
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Semua notification berhasil ditandai sudah dibaca.',
            'data' => [
                'updated_count' => $count,
            ],
        ]);
    }

    public function resolve(Request $request, Notification $notification): JsonResponse
    {
        abort_unless($request->user()->can('notifications.resolve'), 403);

        $row = $this->notificationService->resolve(
            notification: $notification,
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Notification berhasil diresolve.',
            'data' => new NotificationResource($row),
        ]);
    }

    public function scan(ScanAlertRequest $request): JsonResponse
    {
        $result = $this->notificationService->scan(
            filters: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Scan alert berhasil dijalankan.',
            'data' => $result,
        ]);
    }

    public function destroy(Request $request, Notification $notification): JsonResponse
    {
        abort_unless($request->user()->can('notifications.delete'), 403);

        $notification->logs()->create([
            'outlet_id' => $notification->outlet_id,
            'user_id' => $request->user()?->id,
            'action' => 'deleted',
            'status' => 'success',
            'channel' => 'database',
            'message' => 'Notification dihapus.',
            'payload' => [
                'notification_id' => $notification->id,
            ],
            'logged_at' => now(),
        ]);

        $notification->delete();

        return response()->json([
            'message' => 'Notification berhasil dihapus.',
        ]);
    }
}
