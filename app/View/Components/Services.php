<?php

namespace App\View\Components;

use App\Models\Service;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Services extends Component
{
    public Collection $cards;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $title = 'Услуги')
    {
        $categoryImages = config('services_categories.images', []);

        $this->cards = Service::query()
            ->select(['title', 'slug', 'category', 'sort_order'])
            ->orderBy('sort_order')
            ->get()
            ->groupBy('category')
            ->map(function (Collection $items, string $category) use ($categoryImages) {
                return [
                    'category' => $category,
                    'items' => $items,
                    'image' => $categoryImages[$category] ?? null,
                ];
            })
            ->values();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services');
    }
}
