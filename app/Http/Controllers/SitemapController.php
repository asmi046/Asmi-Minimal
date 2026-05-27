<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = collect();

        // Главные страницы
        $urls->push([
            'loc' => url('/'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ]);

        // Контакты
        $urls->push([
            'loc' => url('/contacts'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ]);

        // Портфолио
        $urls->push([
            'loc' => url('/portfolio'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ]);

        // Услуги
        $urls->push([
            'loc' => url('/services'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ]);

        // // Туры
        // Tour::all()->each(function ($tour) use ($urls) {
        //     $urls->push([
        //         'loc' => url("/tour/{$tour->slug}"),
        //         'lastmod' => ($tour->updated_at) ? $tour->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
        //         'changefreq' => 'monthly',
        //         'priority' => '0.6',
        //         'image' => $tour->img ? url('/storage/'.$tour->img) : null,
        //     ]);
        // });

        return response()->view('sitemap', compact('urls'))
            ->header('Content-Type', 'text/xml');
    }
}
