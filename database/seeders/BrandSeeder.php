<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([

            'brand_name' => "KIA",
            'logo' => "logo1kia"
        ]);

        DB::table('brands')->insert([

            'brand_name' => "Prime",
            'logo' => "logo2prime"
        ]);

        DB::table('brands')->insert([

            'brand_name' => "TOTO",
            'logo' => "logo3toto"
        ]);
    }
}
