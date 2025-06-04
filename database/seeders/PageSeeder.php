<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Storage::disk('public')->put("page/main_1.jpg", file_get_contents(public_path('tmp_data/page/main_1.jpg')), 'public');
        // Storage::disk('public')->put("page/main_2.jpg", file_get_contents(public_path('tmp_data/page/main_2.jpg')), 'public');
        // Storage::disk('public')->put("page/main_3.jpg", file_get_contents(public_path('tmp_data/page/main_3.jpg')), 'public');
        // $data = [
        //     [
        //         'title' => "Текст на главной странице",
        //         'img' => "page/main_1.jpg",
        //         'slug' => Str::slug("Текст на главной странице"),
        //         'description' => file_get_contents(public_path('tmp_data/page/main.html')),
        //         'images' => json_encode([
        //             [
        //                 'title' => 'Свайные фундаменты',
        //                 'img' => "page/main_1.jpg",
        //             ],

        //             [
        //                 'title' => 'Свайные фундаменты под дом',
        //                 'img' => "page/main_2.jpg",
        //             ],

        //             [
        //                 'title' => 'Свайные фундаменты для забора',
        //                 'img' => "page/main_3.jpg",
        //             ]
        //         ])
        //     ],

        // ];

        // DB::table("pages")->insert($data);

        $data = [
            [
                'title' => "Политика в области обработки персональных данных",
                'slug' => Str::slug("Политика в области обработки персональных данных"),
                'description' => file_get_contents(public_path('tmp_data/page/policy.html')),
            ],

            [
                'title' => "Согласие на обработку персональных данных",
                'slug' => Str::slug("Согласие на обработку персональных данных"),
                'description' => file_get_contents(public_path('tmp_data/page/accept.html')),
            ],

            [
                'title' => "О файлах Cookie",
                'slug' => Str::slug("О файлах Cookie"),
                'description' => file_get_contents(public_path('tmp_data/page/cookie.html')),
            ],

        ];

        DB::table("pages")->insert($data);
    }
}
