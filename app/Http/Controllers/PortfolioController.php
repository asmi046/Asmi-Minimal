<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\JsonResponse;

class PortfolioController extends Controller
{
    public function index(): JsonResponse
    {
        $items = Portfolio::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('zagl');
    }

    public function show(string $slug): JsonResponse
    {
        $item = Portfolio::query()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('zagl');
    }
}
