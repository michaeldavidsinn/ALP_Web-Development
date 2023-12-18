<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('articles')->insert([

            'title' => "title1",
            'content' => "content1",
            'image' => "image1"
        ]);

        DB::table('articles')->insert([

            'title' => "title2",
            'content' => "content2",
            'image' => "image2"
        ]);

        DB::table('articles')->insert([

            'title' => "title3",
            'content' => "content3",
            'image' => "image3"
        ]);
    }
}
