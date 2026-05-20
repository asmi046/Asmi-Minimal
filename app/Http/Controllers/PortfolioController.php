<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $items = Portfolio::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('zagl');
    }

    public function show(string $slug)
    {
        $item = Portfolio::query()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('zagl');
    }
}
