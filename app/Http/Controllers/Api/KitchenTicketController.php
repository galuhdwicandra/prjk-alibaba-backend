<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Kitchen\CancelKitchenTicketRequest;
use App\Http\Requests\Api\Kitchen\PrintKitchenTicketRequest;
use App\Http\Requests\Api\Kitchen\ReadyKitchenTicketRequest;
use App\Http\Requests\Api\Kitchen\ServeKitchenTicketRequest;
use App\Http\Requests\Api\Kitchen\StartPreparingKitchenTicketRequest;
use App\Http\Requests\Api\Kitchen\StoreKitchenTicketRequest;
use App\Http\Resources\KitchenTicketResource;
use App\Models\KitchenTicket;
use App\Services\Kitchen\KitchenTicketService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class KitchenTicketController extends Controller
{
    public function __construct(
        private readonly KitchenTicketService $kitchenTicketService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.view'), 403);

        $rows = KitchenTicket::query()
            ->with([
                'order.outlet',
                'order.customer',
                'items.orderItem.variants',
                'items.orderItem.modifiers',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('ticket_number', 'like', "%{$search}%")
                        ->orWhereHas('order', function ($orderQuery) use ($search) {
                            $orderQuery->where('order_number', 'like', "%{$search}%")
                                ->orWhere('queue_number', 'like', "%{$search}%");
                        });
                });
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->whereHas('order', function ($orderQuery) use ($request) {
                    $orderQuery->where('outlet_id', (int) $request->input('outlet_id'));
                });
            })
            ->when($request->filled('order_id'), function ($query) use ($request) {
                $query->where('order_id', (int) $request->input('order_id'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar kitchen ticket berhasil diambil.',
            'data' => KitchenTicketResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreKitchenTicketRequest $request): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.create'), 403);

        $row = $this->kitchenTicketService->createFromOrderId(
            orderId: (int) $request->validated('order_id'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil dibuat.',
            'data' => new KitchenTicketResource($row),
        ], 201);
    }

    public function show(Request $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.view'), 403);

        return response()->json([
            'message' => 'Detail kitchen ticket berhasil diambil.',
            'data' => new KitchenTicketResource($kitchenTicket->load([
                'order.outlet',
                'order.customer',
                'items.orderItem.variants',
                'items.orderItem.modifiers',
            ])),
        ]);
    }

    public function print(PrintKitchenTicketRequest $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.print'), 403);

        $row = $this->kitchenTicketService->markPrinted(
            ticket: $kitchenTicket,
            printedAt: $request->input('printed_at'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil ditandai sudah dicetak.',
            'data' => new KitchenTicketResource($row),
        ]);
    }

    public function startPreparing(StartPreparingKitchenTicketRequest $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.start_preparing'), 403);

        $row = $this->kitchenTicketService->startPreparing(
            ticket: $kitchenTicket,
            userId: $request->user()->id,
            preparedAt: $request->input('prepared_at'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil diubah ke preparing.',
            'data' => new KitchenTicketResource($row),
        ]);
    }

    public function markReady(ReadyKitchenTicketRequest $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.mark_ready'), 403);

        $row = $this->kitchenTicketService->markReady(
            ticket: $kitchenTicket,
            userId: $request->user()->id,
            readyAt: $request->input('ready_at'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil diubah ke ready.',
            'data' => new KitchenTicketResource($row),
        ]);
    }

    public function serve(ServeKitchenTicketRequest $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.serve'), 403);

        $row = $this->kitchenTicketService->serve(
            ticket: $kitchenTicket,
            userId: $request->user()->id,
            completedAt: $request->input('completed_at'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil di-serve / diselesaikan.',
            'data' => new KitchenTicketResource($row),
        ]);
    }

    public function cancel(CancelKitchenTicketRequest $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.cancel'), 403);

        $row = $this->kitchenTicketService->cancel(
            ticket: $kitchenTicket,
            userId: $request->user()->id,
            cancelledAt: $request->input('cancelled_at'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil dibatalkan.',
            'data' => new KitchenTicketResource($row),
        ]);
    }

    public function destroy(Request $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.delete'), 403);

        if (!in_array($kitchenTicket->status, ['pending', 'cancelled'], true)) {
            return response()->json([
                'message' => 'Hanya kitchen ticket pending atau cancelled yang boleh dihapus.',
            ], 422);
        }

        $kitchenTicket->delete();

        return response()->json([
            'message' => 'Kitchen ticket berhasil dihapus.',
        ]);
    }
}
