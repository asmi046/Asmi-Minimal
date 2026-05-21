<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => '/',
                'seo_title' => 'Разработка цифровых сервисов, web-приложений и сайтов под ключ',
                'seo_description' => 'Услуги по разработке цифровых сервисов, web-приложений и сайтов. Полный спектр услуг от опытной комманды разработчиков',
                'page_title' => '',
            ],
            [
                'url' => 'page/politika-v-oblasti-obrabotki-personalnyx-dannyx',
                'seo_title' => 'Политика в области обработки персональных данных',
                'seo_description' => 'Политика в области обработки персональных данных',
                'page_title' => '',
            ],
            [
                'url' => 'page/soglasie-na-obrabotku-personalnyx-dannyx',
                'seo_title' => 'Согласие на обработку персональных данных',
                'seo_description' => 'Согласие на обработку персональных данных',
                'page_title' => '',
            ],
            [
                'url' => 'page/o-failax-cookie',
                'seo_title' => 'Подробнее о файлах cookie',
                'seo_description' => 'Подробнее о файлах cookie',
                'page_title' => '',
            ],
            [
                'url' => 'contacts',
                'seo_title' => 'Контакты студии',
                'seo_description' => 'Свяжитесь с нами любым удобным способом, вы всегда можете рассчитывать на консультацию опытных специалистов по всем вопросам связанным с разработкой и прдвижением',
                'page_title' => '',
            ],
            [
                'url' => 'portfolio',
                'seo_title' => 'Портфолио и кейсы Асми Студио',
                'seo_description' => 'Ознакомьтесь с нашим портфолио и кейсами. В разделе представлены проекты в области разработки цифровых сервисов, web-приложений и сайтов.',
                'page_title' => '',
            ],

            [
                'url' => 'services',
                'seo_title' => 'Услуги Асми Студио, разработка цифровых сервисов, web-приложений и сайтов',
                'seo_description' => 'Ознакомьтесь с нашими услугами по разработке цифровых сервисов, web-приложений и сайтов. Безплатная консультация по любой услуге.',
                'page_title' => '',
            ],
        ];

        DB::table('seo_data')->insert($data);
    }
}
