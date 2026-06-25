<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'Разработка сайтов',
                'slug' => 'razrabotka-sajtov',
                'category' => 'Разработка сайтов',
                'template' => 'templates.razrabotka-saitov',
                'sort_order' => 1,
            ],
            [
                'title' => 'Разработка интернет магазина',
                'slug' => 'razrabotka-internet-magazina',
                'category' => 'Разработка сайтов',
                'template' => null,
                'sort_order' => 10,
            ],
            [
                'title' => 'Разработка корпоративного сайта',
                'slug' => 'razrabotka-korporativnogo-sajta',
                'category' => 'Разработка сайтов',
                'template' => null,
                'sort_order' => 20,
            ],
            [
                'title' => 'разработка посадочной страницы',
                'slug' => 'razrabotka-posadochnoj-stranicy',
                'category' => 'Разработка сайтов',
                'template' => null,
                'sort_order' => 30,
            ],
            [
                'title' => 'Разработка сайтов на Wordpress',
                'slug' => 'razrabotka-sajtov-na-wordpress',
                'category' => 'Разработка сайтов',
                'template' => null,
                'sort_order' => 40,
            ],
            [
                'title' => 'Разработка сайтов на 1С Битрикс',
                'slug' => 'razrabotka-sajtov-na-1s-bitriks',
                'category' => 'Разработка сайтов',
                'template' => null,
                'sort_order' => 50,
            ],
            [
                'title' => 'Комплексное сопровождение сайтов',
                'slug' => 'kompleksnoe-soprovozhdenie-sajtov',
                'category' => 'Сопровождение сайтов',
                'template' => null,
                'sort_order' => 60,
            ],
            [
                'title' => 'Сопровождение сайтов на Wordpress',
                'slug' => 'soprovozhdenie-sajtov-na-wordpress',
                'category' => 'Сопровождение сайтов',
                'template' => null,
                'sort_order' => 70,
            ],
            [
                'title' => 'Сопровождение сайтов на 1С Битрикс',
                'slug' => 'soprovozhdenie-sajtov-na-1s-bitriks',
                'category' => 'Сопровождение сайтов',
                'template' => null,
                'sort_order' => 80,
            ],
            [
                'title' => 'Разработка логотипа',
                'slug' => 'razrabotka-logotipa',
                'category' => 'Графический дизайн',
                'template' => null,
                'sort_order' => 90,
            ],
            [
                'title' => 'Разарботка буклета',
                'slug' => 'razarbotka-bukleta',
                'category' => 'Графический дизайн',
                'template' => null,
                'sort_order' => 100,
            ],
            [
                'title' => 'Разработка фирменного стиля',
                'slug' => 'razrabotka-firmennogo-stilya',
                'category' => 'Графический дизайн',
                'template' => null,
                'sort_order' => 110,
            ],
        ];

        Service::query()->insert($items);
    }
}
