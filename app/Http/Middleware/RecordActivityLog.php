<?php

namespace App\Http\Middleware;

use App\Services\Audit\ActivityLogService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecordActivityLog
{
    public function __construct(
        private readonly ActivityLogService $activityLogService
    ) {
    }

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (!$this->shouldRecord($request, $response)) {
            return $response;
        }

        $this->activityLogService->record([
            'user_id' => $request->user()?->id,
            'outlet_id' => $this->resolveOutletId($request),
            'action' => $this->resolveAction($request),
            'module' => $this->resolveModule($request),
            'reference_type' => null,
            'reference_id' => $this->resolveReferenceId($request),
            'description' => $this->resolveDescription($request, $response),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'metadata' => [
                'method' => $request->method(),
                'path' => $request->path(),
                'route' => $request->route()?->uri(),
                'status_code' => $response->getStatusCode(),
                'payload_keys' => array_keys($request->except([
                    'password',
                    'password_confirmation',
                    'current_password',
                    'token',
                    'authorization',
                ])),
            ],
        ]);

        return $response;
    }

    private function shouldRecord(Request $request, Response $response): bool
    {
        if (!$request->user()) {
            return false;
        }

        if ($response->getStatusCode() >= 500) {
            return false;
        }

        if (in_array($request->method(), ['GET', 'HEAD', 'OPTIONS'], true)) {
            return false;
        }

        if (str_contains($request->path(), 'activity-logs')) {
            return false;
        }

        return true;
    }

    private function resolveAction(Request $request): string
    {
        $method = $request->method();
        $path = $request->path();

        if (str_contains($path, '/approve')) {
            return 'approve';
        }

        if (str_contains($path, '/reject')) {
            return 'reject';
        }

        if (str_contains($path, '/cancel')) {
            return 'cancel';
        }

        if (str_contains($path, '/send')) {
            return 'send';
        }

        if (str_contains($path, '/receive')) {
            return 'receive';
        }

        if (str_contains($path, '/post')) {
            return 'post';
        }

        if (str_contains($path, '/close')) {
            return 'close';
        }

        if ($method === 'POST') {
            return 'create';
        }

        if (in_array($method, ['PUT', 'PATCH'], true)) {
            return 'update';
        }

        if ($method === 'DELETE') {
            return 'delete';
        }

        return strtolower($method);
    }

    private function resolveModule(Request $request): string
    {
        $segments = explode('/', trim($request->path(), '/'));

        $module = $segments[1] ?? $segments[0] ?? 'system';

        return str_replace('-', '_', $module);
    }

    private function resolveReferenceId(Request $request): ?int
    {
        foreach ($request->route()?->parameters() ?? [] as $parameter) {
            if (is_object($parameter) && method_exists($parameter, 'getKey')) {
                return (int) $parameter->getKey();
            }

            if (is_numeric($parameter)) {
                return (int) $parameter;
            }
        }

        return null;
    }

    private function resolveOutletId(Request $request): ?int
    {
        if ($request->filled('outlet_id')) {
            return (int) $request->input('outlet_id');
        }

        foreach ($request->route()?->parameters() ?? [] as $parameter) {
            if (is_object($parameter) && isset($parameter->outlet_id)) {
                return (int) $parameter->outlet_id;
            }

            if (is_object($parameter) && isset($parameter->source_outlet_id)) {
                return (int) $parameter->source_outlet_id;
            }
        }

        return null;
    }

    private function resolveDescription(Request $request, Response $response): string
    {
        return sprintf(
            '%s %s menghasilkan status %s.',
            $request->method(),
            $request->path(),
            $response->getStatusCode()
        );
    }
}
