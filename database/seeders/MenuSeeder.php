<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_name' => 'Главное меню',
                'title' => 'Главная',
                'order' => 1,
                'lnk' => '/',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Услуги',
                'order' => 2,
                'lnk' => '/services',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Портфолио и кейсы',
                'order' => 3,
                'lnk' => '/portfolio',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 4,
                'lnk' => '/contacts',
            ],

        ];

        DB::table('menus')->insert($data);

        $footer_menu = [
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Разработка интернет магазина',
                'order' => 1,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Разработка корпоративного сайта',
                'order' => 2,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'разработка посадочной страницы',
                'order' => 3,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Разработка сайтов на Wordpress',
                'order' => 4,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Разработка сайтов на 1С Битрикс',
                'order' => 5,
                'lnk' => '#',
            ],
        ];

        DB::table('menus')->insert($footer_menu);

        $footer_menu_2 = [

            [
                'menu_name' => 'Полезная информация',
                'title' => 'Услуги',
                'order' => 1,
                'lnk' => '/services',
            ],
            [
                'menu_name' => 'Полезная информация',
                'title' => 'Портфолио',
                'order' => 2,
                'lnk' => '/portfolio',
            ],
            [
                'menu_name' => 'Полезная информация',
                'title' => 'Контакты',
                'order' => 3,
                'lnk' => '/contacts',
            ],
            [
                'menu_name' => 'Полезная информация',
                'title' => 'Политика конфиденциальности',
                'order' => 4,
                'lnk' => '/page/politika-v-oblasti-obrabotki-personalnyx-dannyx',
            ],
            [
                'menu_name' => 'Полезная информация',
                'title' => 'Согласие на обработку персональных данных',
                'order' => 5,
                'lnk' => '/page/soglasie-na-obrabotku-personalnyx-dannyx',
            ],
        ];

        DB::table('menus')->insert($footer_menu_2);
    }
}
