<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicesCompetencies extends Component
{
    /**
     * @var array<string, array<int, array{image:string,title:string}>>
     */
    public array $groups;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = 'Наши компетенции',
        public string $description = 'Наша команда имеет опыт работы с различными технологиями и инструментами, это позволяет нам создавать и обслуживать самые различные решения для вашего бизнеса.'
    ) {
        $this->groups = config('skills', []);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services-competencies');
    }
}
