<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\JsonResponse;

class ServiceController extends Controller
{
    public function index(): JsonResponse
    {
        $items = Service::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return response()->json($items);
    }

    public function show(string $slug): JsonResponse
    {
        $item = Service::query()
            ->where('slug', $slug)
            ->firstOrFail();

        return response()->json($item);
    }
}
