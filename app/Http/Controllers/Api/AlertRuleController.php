<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Notification\StoreAlertRuleRequest;
use App\Http\Requests\Api\Notification\UpdateAlertRuleRequest;
use App\Http\Resources\AlertRuleResource;
use App\Models\AlertRule;
use App\Services\Notification\AlertRuleService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AlertRuleController extends Controller
{
    public function __construct(
        private readonly AlertRuleService $alertRuleService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('alert_rules.view'), 403);

        $rows = AlertRule::query()
            ->with('outlet')
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where(function ($ruleQuery) use ($request) {
                    $ruleQuery->whereNull('outlet_id')
                        ->orWhere('outlet_id', (int) $request->input('outlet_id'));
                });
            })
            ->when($request->filled('alert_type'), function ($query) use ($request) {
                $query->where('alert_type', $request->string('alert_type')->toString());
            })
            ->when($request->filled('severity'), function ($query) use ($request) {
                $query->where('severity', $request->string('severity')->toString());
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar alert rule berhasil diambil.',
            'data' => AlertRuleResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreAlertRuleRequest $request): JsonResponse
    {
        $row = $this->alertRuleService->create($request->validated());

        return response()->json([
            'message' => 'Alert rule berhasil dibuat.',
            'data' => new AlertRuleResource($row),
        ], 201);
    }

    public function show(Request $request, AlertRule $alertRule): JsonResponse
    {
        abort_unless($request->user()->can('alert_rules.view'), 403);

        return response()->json([
            'message' => 'Detail alert rule berhasil diambil.',
            'data' => new AlertRuleResource($alertRule->load('outlet')),
        ]);
    }

    public function update(UpdateAlertRuleRequest $request, AlertRule $alertRule): JsonResponse
    {
        $row = $this->alertRuleService->update($alertRule, $request->validated());

        return response()->json([
            'message' => 'Alert rule berhasil diupdate.',
            'data' => new AlertRuleResource($row),
        ]);
    }

    public function destroy(Request $request, AlertRule $alertRule): JsonResponse
    {
        abort_unless($request->user()->can('alert_rules.delete'), 403);

        if ($alertRule->notificationLogs()->exists()) {
            return response()->json([
                'message' => 'Alert rule tidak bisa dihapus karena sudah memiliki notification log.',
            ], 422);
        }

        $alertRule->delete();

        return response()->json([
            'message' => 'Alert rule berhasil dihapus.',
        ]);
    }
}
