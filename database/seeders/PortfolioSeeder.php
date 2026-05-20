<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'Корпоративный сайт для B2B-компании',
                'slug' => 'korporativnyj-sajt-dlya-b2b-kompanii',
                'category' => 'Разработка сайтов',
                'sort_order' => 10,
                'cover' => 'img/portfolio/portfolio_1.webp',
                'description' => 'Запуск корпоративного сайта с интеграцией форм заявок и аналитики.',
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
