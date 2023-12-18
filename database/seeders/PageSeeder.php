<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('pages')->insert([

            'page_name' => "About",
            'main_image' => "PageGambar1",
            'content' => "About apaan",
        ]);

        DB::table('pages')->insert([

            'page_name' => "Contact",
            'main_image' => "PageGambar2",
            'content' => "About apaan",
        ]);
    }
}
