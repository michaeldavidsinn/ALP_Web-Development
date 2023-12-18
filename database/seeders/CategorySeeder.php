<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([

            'categories_name' => "Ceramics"
        ]);

        DB::table('categories')->insert([

            'categories_name' => "Closet"
        ]);

        DB::table('categories')->insert([

            'categories_name' => "Wastafel"
        ]);
    }
}
