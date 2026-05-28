<?php

namespace Database\Seeders;

use Asmi\LaravelFaq\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'section' => 'Страница услуги',
                'sort_order' => 0,
                'question' => 'Какие условия оплаты?',
                'answer' => '<p>По всем нашим проектам мы практикуем предоплату в размере 50% от стоимости услуги.</p> <p>Оставшуюся часть оплаты необходимо внести после завершения проекта.</p>',
            ],
            [
                'section' => 'Страница услуги',
                'sort_order' => 0,
                'question' => 'Какие способы оплаты доступны?',
                'answer' => '<p>Мы принимаем оплату на расчетный счет нашей организации. Оплатить наши услуги вы можете при помощи любого банковского приложения по выставленному счету.</p>',
            ],
        ];

        foreach ($items as $item) {
            Faq::create($item);
        }
    }
}
