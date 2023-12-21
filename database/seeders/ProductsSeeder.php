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

            'name' => "KIA JENNA",
            'descriptions' => "<strong>8005</strong>
            \n<strong>dimension 430x430x170 mm</strong>
            \nType : Highround Basin Countertop
            \nFunction : Standard 1 Faucet Hole
            \nMaterial : Ceramic
            \nNet Weight : 7.8 Kg",
            'photo' => "image/KIA_JENNA_8005.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);


        DB::table('products')->insert([

            'name' => "KIA LYDIA",
            'descriptions' => "<strong>8428</strong>
            \n<strong>dimension 420x420x140 mm</strong>
            \nType : Wide Round Basin Countertop
            \nFunction : Standard 1 Faucet Hole
            \nMaterial : Ceramic
            \nNet Weight : 6.4 Kg",
            'photo' => "image/KIA_LYDIA_8428.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA AQUILA",
            'descriptions' => "<strong>17317</strong>
            \n<strong>dimension 490x430x220 mm</strong>
            \nType : Wall Hung Basin
            \nFunction : Standard 1 Faucet Hole
            \nMaterial : Ceramic
            \nNet Weight : 12.2 Kg",
            'photo' => "image/KIA_AQUILA_17317.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA VIONY",
            'descriptions' => "<strong>8417A</strong>
            \n<strong>dimension 465x320x135 mm</strong>
            \nType : Squere Basin Countertop
            \nFunction : Standard 1 Faucet Hole
            \nMaterial : Ceramic
            \nNet Weight : 7.8 Kg",
            'photo' => "image/KIA_VIONY_8417A.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA MORRIS",
            'descriptions' => "<strong>101</strong>
            \n<strong>dimension 410x310x170 mm</strong>
            \nType : Wall Hung Basin
            \nFunction : Standard 1 Faucet Hole
            \nMaterial : Ceramic
            \nNet Weight : 8 Kg",
            'photo' => "image/KIA_MORRIS_101.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA VARSHA",
            'descriptions' => "<strong>17337</strong>
            \n<strong>dimension 480x340x195 mm</strong>
            \nType : Wall Hung Basin
            \nFunction : Standard 1 Faucet Hole
            \nMaterial : Ceramic
            \nNet Weight : 10.6 Kg",
            'photo' => "image/KIA_VARSHA_17337.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA ANGSANA",
            'descriptions' => "<strong>010</strong>
            \nWater Closet : Two Piece Toilet
            \nSize : 625x360x730 mm
            \nBowl Shape : Elongated
            \nOutlet : S-trap, rough-in 300 mm
            \nFlush System : Wash Down
            \nWater Consumption : 3/6 L
            \nNet Weight : 30.94 Kg",
            'photo' => "image/KIA_ANGSANA_010.png",
            'category_id' => 2,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA VENUS",
            'descriptions' => "<strong>9009</strong>
            \nWater Closet : One Piece Toilet
            \nSize : 680x370x650 mm
            \nBowl Shape : Elongated
            \nOutlet : S-trap, rough-in 300 mm
            \nFlush System : Wash Down
            \nWater Consumption : 3/6 L
            \nNet Weight : 43 Kg",
            'photo' => "image/KIA_VENUS_9009.png",
            'category_id' => 2,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA IVANA",
            'descriptions' => "<strong>660</strong>
            \nWater Closet : Two Piece Toilet
            \nSize : 665x380x760 mm
            \nBowl Shape : Elongated
            \nOutlet : S-trap, rough-in 300 mm
            \nFlush System : Siphonic
            \nWater Consumption : 3/6 L
            \nNet Weight : 31.5 Kg",
            'photo' => "image/KIA_IVANA_660.png",
            'category_id' => 2,
            'brand_id' => 1
        ]);
    }
}
