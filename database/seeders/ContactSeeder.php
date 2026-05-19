<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert(
            [
                [
                    'name' => 'site_name',
                    'title' => 'Имя сайта',
                    'value' => 'Асми Студио',
                ],

                [
                    'name' => 'phone',
                    'title' => 'Телефон',
                    'value' => '+7 (903) 633-08-01',
                ],

                [
                    'name' => 'tg_lnk',
                    'title' => 'Ссылка  на Телеграм',
                    'value' => 'https://t.me/asmist',
                ],

                [
                    'name' => 'max_lnk',
                    'title' => 'Ссылка  на Max',
                    'value' => 'https://max.ru/u/f9LHodD0cOJwWaoPGodjEuQzyUtP4VkAjbW6slhbRugWDPZK4taUW0n9PF4',
                ],

                [
                    'name' => 'adress',
                    'title' => 'Адрес компании',
                    'value' => '305016, г. Курск, ул. Павлуновского, 48А',
                ],

                [
                    'name' => 'work_time',
                    'title' => 'Время работы',
                    'value' => 'Пн-Пт 10:00 - 20:00 Сб-Вс 10:00 - 16:00',
                ],

                [
                    'name' => 'email',
                    'title' => 'E-mail',
                    'value' => 'info@asmi-studio.ru',
                ],

                [
                    'name' => 'company_name',
                    'title' => 'Имя компании',
                    'value' => 'ИП Смирнов А. А.',
                ],

                [
                    'name' => 'inn',
                    'title' => 'ИНН',
                    'value' => '463246349734',
                ],

                [
                    'name' => 'ogrn',
                    'title' => 'ОГРН',
                    'value' => '313463235300020',
                ],

                [
                    'name' => 'rs',
                    'title' => 'Р/С',
                    'value' => '860249669343 ',
                ],

                [
                    'name' => 'geo',
                    'title' => 'Кординаты',
                    'value' => '51.72770723488684,36.164656161376946',
                ],

            ]
        );
    }
}
