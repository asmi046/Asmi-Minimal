<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => "/",
                'seo_title' => "Разработка цифровых сервисов, web-приложений и сайтов под ключ",
                'seo_description' => "Услуги по разработке цифровых сервисов, web-приложений и сайтов. Полный спектр услуг от опытной комманды разработчиков",
                'page_title' => "",
            ],
            [
                'url' => "page/politika-v-oblasti-obrabotki-personalnyx-dannyx",
                'seo_title' => "Политика в области обработки персональных данных",
                'seo_description' => "Политика в области обработки персональных данных",
                'page_title' => "",
            ],
            [
                'url' => "page/soglasie-na-obrabotku-personalnyx-dannyx",
                'seo_title' => "Согласие на обработку персональных данных",
                'seo_description' => "Согласие на обработку персональных данных",
                'page_title' => "",
            ],
        ];

        DB::table("seo_data")->insert($data);
    }
}
