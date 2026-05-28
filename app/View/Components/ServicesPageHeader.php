<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicesPageHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $subtitle,
        public string $image,
        public string $imageAlt = 'Наши услуги',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services-page-header');
    }
}
