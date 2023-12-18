<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {

        DB::table('products')->insert([

            'name' => "pro1",
            'descriptions' => "des1",
            'photo' => "proimage1",
            'category_id' => 1,
            'brand_id' => 1
        ]);

        DB::table('products')->insert([

            'name' => "pro2",
            'descriptions' => "des2",
            'photo' => "proimage2",
            'category_id' => 3,
            'brand_id' => 1
        ]);

        DB::table('products')->insert([

            'name' => "pro3",
            'descriptions' => "des3",
            'photo' => "proimage3",
            'category_id' => 2,
            'brand_id' => 1
        ]);

        DB::table('products')->insert([

            'name' => "pro4",
            'descriptions' => "des4",
            'photo' => "proimage4",
            'category_id' => 1,
            'brand_id' => 2
        ]);

        DB::table('products')->insert([

            'name' => "pro5",
            'descriptions' => "des5",
            'photo' => "proimage5",
            'category_id' => 2,
            'brand_id' => 2
        ]);

        DB::table('products')->insert([

            'name' => "pro6",
            'descriptions' => "des6",
            'photo' => "proimage6",
            'category_id' => 3,
            'brand_id' => 2
        ]);

        DB::table('products')->insert([

            'name' => "pro7",
            'descriptions' => "des7",
            'photo' => "proimage7",
            'category_id' => 1,
            'brand_id' => 3
        ]);

        DB::table('products')->insert([

            'name' => "pro8",
            'descriptions' => "des8",
            'photo' => "proimage8",
            'category_id' => 2,
            'brand_id' => 3
        ]);

        DB::table('products')->insert([

            'name' => "pro9",
            'descriptions' => "des9",
            'photo' => "proimage9",
            'category_id' => 3,
            'brand_id' => 3
        ]);
    }
}
