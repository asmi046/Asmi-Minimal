<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $items = Service::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('zagl');
    }

    public function show(string $slug)
    {
        $item = Service::query()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('zagl');
    }
}
