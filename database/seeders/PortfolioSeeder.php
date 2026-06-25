<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put('portfolio/potapov_obl.webp', file_get_contents(public_path('seedet_data/portfolio/potapov/potapov_obl.webp')), 'public');

        $items = [
            [
                'title' => 'Разработка посадочной страницы для ведущего Александра Потапова',
                'slug' => 'razrabotka-saita-dlya-vedushhego-aleksandra-potapova',
                'category' => 'Разработка',
                'sort_order' => 10,
                'cover' => 'portfolio/potapov_obl.webp',
                'description' => file_get_contents(public_path('seedet_data/portfolio/potapov/text.html')),
            ],
            [
                'title' => 'Интернет-магазин промышленного оборудования',
                'slug' => 'internet-magazin-promyshlennogo-oborudovaniya',
                'category' => 'E-commerce',
                'sort_order' => 20,
                'cover' => 'img/portfolio/portfolio_2.webp',
                'description' => 'Каталог на несколько тысяч SKU, фильтрация и экспорт в CRM.',
            ],
            [
                'title' => 'Редизайн и сопровождение продуктового лендинга',
                'slug' => 'redizajn-i-soprovozhdenie-produktovogo-lendinga',
                'category' => 'Сопровождение сайтов',
                'sort_order' => 30,
                'cover' => 'img/portfolio/portfolio_3.webp',
                'description' => null,
            ],
        ];

        Portfolio::query()->insert($items);
    }
}
