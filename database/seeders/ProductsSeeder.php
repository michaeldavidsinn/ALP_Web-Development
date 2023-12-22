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
            <strong>dimension 430x430x170 mm</strong>
            Type : Highround Basin Countertop
            Function : Standard 1 Faucet Hole
            Material : Ceramic
            Net Weight : 7.8 Kg",
            'photo' => "image/KIA_JENNA_8005.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);


        DB::table('products')->insert([

            'name' => "KIA LYDIA",
            'descriptions' => "<strong>8428</strong>
            <strong>dimension 420x420x140 mm</strong>
            Type : Wide Round Basin Countertop
            Function : Standard 1 Faucet Hole
            Material : Ceramic
            Net Weight : 6.4 Kg",
            'photo' => "image/KIA_LYDIA_8428.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA AQUILA",
            'descriptions' => "<strong>17317</strong>
            <strong>dimension 490x430x220 mm</strong>
            Type : Wall Hung Basin
            Function : Standard 1 Faucet Hole
            Material : Ceramic
            Net Weight : 12.2 Kg",
            'photo' => "image/KIA_AQUILA_17317.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA VIONY",
            'descriptions' => "<strong>8417A</strong>
            <strong>dimension 465x320x135 mm</strong>
            Type : Squere Basin Countertop
            Function : Standard 1 Faucet Hole
            Material : Ceramic
            Net Weight : 7.8 Kg",
            'photo' => "image/KIA_VIONY_8417A.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA MORRIS",
            'descriptions' => "<strong>101</strong>
            <strong>dimension 410x310x170 mm</strong>
            Type : Wall Hung Basin
            Function : Standard 1 Faucet Hole
            Material : Ceramic
            Net Weight : 8 Kg",
            'photo' => "image/KIA_MORRIS_101.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA VARSHA",
            'descriptions' => "<strong>17337</strong>
            <strong>dimension 480x340x195 mm</strong>
            Type : Wall Hung Basin
            Function : Standard 1 Faucet Hole
            Material : Ceramic
            Net Weight : 10.6 Kg",
            'photo' => "image/KIA_VARSHA_17337.png",
            'category_id' => 3,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA ANGSANA",
            'descriptions' => "<strong>010</strong>
            Water Closet : Two Piece Toilet
            Size : 625x360x730 mm
            Bowl Shape : Elongated
            Outlet : S-trap, rough-in 300 mm
            Flush System : Wash Down
            Water Consumption : 3/6 L
            Net Weight : 30.94 Kg",
            'photo' => "image/KIA_ANGSANA_010.png",
            'category_id' => 2,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA VENUS",
            'descriptions' => "<strong>9009</strong>
            Water Closet : One Piece Toilet
            Size : 680x370x650 mm
            Bowl Shape : Elongated
            Outlet : S-trap, rough-in 300 mm
            Flush System : Wash Down
            Water Consumption : 3/6 L
            Net Weight : 43 Kg",
            'photo' => "image/KIA_VENUS_9009.png",
            'category_id' => 2,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KIA IVANA",
            'descriptions' => "<strong>660</strong>
            Water Closet : Two Piece Toilet
            Size : 665x380x760 mm
            Bowl Shape : Elongated
            Outlet : S-trap, rough-in 300 mm
            Flush System : Siphonic
            Water Consumption : 3/6 L
            Net Weight : 31.5 Kg",
            'photo' => "image/KIA_IVANA_660.png",
            'category_id' => 2,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "ARTIC GREY",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/ARTIC GREY type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "AULIA BROWN",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/AULIA BROWN type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "AULIA DARK GREY",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/AULIA DARK GREY type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "AULIA GREY",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/AULIA GREY type G R size 60 x 60 cm .png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "AVELLINO WHITE",
            'descriptions' => "Type : G R
            Size : 80x80 cm",
            'photo' => "image/AVELLINO WHITE type G R size 80x80 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "BACCARA BLACK",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/BACCARA BLACK type G R size 60x60 cm .png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "BARONIA GREY",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/BARONIA GREY type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "BERLIN BROWN",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/BERLIN BROWN type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "BOIS",
            'descriptions' => "Type : M E R
            Size : 60x120 cm",
            'photo' => "image/BOIS type M E R size 60x120 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "BOLTON BROWN",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/BOLTON BROWN type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "BOTSWANA BLACK",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/BOTSWANA BLACK type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "BRUNO BEIGE",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/BRUNO BEIGE type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "CASERTA WHITE",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/CASERTA WHITE type G R size 60x60 cm .png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "CHIARA",
            'descriptions' => "Type : M
            Size : 60x120 cm",
            'photo' => "image/CHIARA type M size 60x120 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "CLAYTON BEIGE",
            'descriptions' => "Type : M R
            Size : 60x60 cm",
            'photo' => "image/CLAYTON BEIGE type M R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "DANVILLE GREY",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/DANVILLE GREY type G R size 60x60 cm .png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "DURBAN BLACK",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/DURBAN BLACK type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "DZANIA",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/DZANIA type G R size 60x60 cm .png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "ELBA",
            'descriptions' => "Type : G R
            Size : 60x120 cm",
            'photo' => "image/ELBA type G R size 60x120 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "GABY GREY",
            'descriptions' => "Type : G R
            Size : 80x80 cm",
            'photo' => "image/GABY GREY type G R size 80x80 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "GRENADA BLACK",
            'descriptions' => "Type : G R
            Size : 60x120 cm",
            'photo' => "image/GRENADA BLACK type G R size 60x120 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "HANSEL GREY",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/HANSEL GREY type G R size 60x60 cm .png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "JEJU WHITE",
            'descriptions' => "Type : G R
            Size : 60x120 cm",
            'photo' => "image/JEJU WHITE type G R size 60x120 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "JENEWA BEIGE",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/JENEWA BEIGE type M R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "KALAHARI GREY",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/KALAHARI GREY type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "KIMBERLY",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/KIMBERLY type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "LAVA BROWN",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/LAVA BROWN type G R size 60x60 cm .png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "LUCANIA GREY",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/LUCANIA GREY type G R size 60x60 cm .png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "LUCY GREY",
            'descriptions' => "Type : G R
            Size : 80x80 cm",
            'photo' => "image/LUCY GREY type G R size 80x80 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "LYNA",
            'descriptions' => "Type : G R
            Size : 80x80 cm",
            'photo' => "image/LYNA type G R size 80x80 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "MALAWI ROSE",
            'descriptions' => "Type : G
            Size : 60x60 cm",
            'photo' => "image/MALAWI ROSE type G size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "MANILA BEIGE",
            'descriptions' => "Type : G R
            Size : 80x80 cm",
            'photo' => "image/MANILA BEIGE type G R size 80x80 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "MATERA BLACK",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/MATERA BLACK type G R size 60x60 cm .png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "MYRA BROWN",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/MYRA BROWN type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "NATHAN GREY",
            'descriptions' => "Type : G R
            Size : 80x80 cm",
            'photo' => "image/NATHAN GREY type G R size 80x80cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "OLIVIA WHITE",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/OLIVIA WHITE type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "ORIZABA DARK GREY",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/ORIZABA DARK GREY type G R size 60x60 cm .png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "QUINSA",
            'descriptions' => "Type : G R
            Size : 80x80 cm",
            'photo' => "image/QUINSA type G R size 80x80 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "ROLAND BROWN",
            'descriptions' => "Type : G R
            Size : 80x80 cm",
            'photo' => "image/ROLAND BROWN type G R size 80x80 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "ROWENA BEIGE",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/ROWENA BEIGE type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "SALVATORE WHITE",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/SALVATORE WHITE type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "SEKAYU BROWN",
            'descriptions' => "Type : G
            Size : 60x60 cm",
            'photo' => "image/SEKAYU BROWN type G size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "SEROJA BROWN",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/SEROJA BROWN type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "SIMPSON BEIGE",
            'descriptions' => "Type : G R
            Size : 60x120 cm",
            'photo' => "image/SIMPSON BEIGE type G R size 60x120cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "TORAJA BROWN",
            'descriptions' => "Type : G R
            Size : 80x80 cm",
            'photo' => "image/TORAJA BROWN type G R size 80x80 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "URBINO WHITE",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/URBINO WHITE type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "VALENCIA BEIGE",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/VALENCIA BEIGE type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "VETRO",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/VETRO type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "VETRO",
            'descriptions' => "Type : G R
            Size : 60x120 cm",
            'photo' => "image/VETRO type G R size 60x120 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "VEVEY GREY",
            'descriptions' => "Type : G R
            Size : 80x80 cm",
            'photo' => "image/VEVEY GREY type G R size 80x80 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "VULKA",
            'descriptions' => "Type : G R
            Size : 60x120 cm",
            'photo' => "image/VULKA type G R size 60x120 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "ZARINDA DARK GREY",
            'descriptions' => "Type : G R
            Size : 60x60 cm",
            'photo' => "image/ZARINDA DARK GREY type G R size 60x60 cm.png",
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([

            'name' => "VERMONT BEIGE",
            'descriptions' => "Type : M
            Size : 50x50 cm",
            'photo' => "image/VERMONT BEIGE type M size 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "VERMONT GREY",
            'descriptions' => "Type : M
            Size : 50x50 cm",
            'photo' => "image/VERMONT GREY type M size 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "LIMESTONE GREY",
            'descriptions' => "Type : G R
            Size : 50x50 cm
            Class : A",
            'photo' => "image/LIMESTONE GREY type G R size 50x50 cm class A.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "LIMESTONE BROWN",
            'descriptions' => "Type : G R
            Size : 50x50 cm
            Class : A",
            'photo' => "image/LIMESTONE BROWN type G R size 50x50 cm class A.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "LIMESTONE BEIGE",
            'descriptions' => "Type : G R
            Size : 50x50 cm
            Class : A",
            'photo' => "image/LIMESTONE BEIGE type G R size 50x50 cm class A.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "VERSAILLES BEIGE",
            'descriptions' => "Type : E R
            Size : 50x50 cm
            Class : C",
            'photo' => "image/VERSAILLES BEIGE type E R size 50x50 cm class C .png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "VERSAILLES GREY",
            'descriptions' => "Type : E R
            Size : 50x50 cm
            Class : C",
            'photo' => "image/VERSAILLES GREY type E R size 50x50 cm class C.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "VERSAILLES BLACK",
            'descriptions' => "Type : E R
            Size : 50x50 cm
            Class : C",
            'photo' => "image/VERSAILLES BLACK type E R size 50x50 cm class C.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "DEEP NAVY BLUE",
            'descriptions' => "Type : S R
            Size : 50x50 cm
            Class : C",
            'photo' => "image/DEEP NAVY BLUE type S R size 50x50 cm class C.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "DEEP DARK GREY",
            'descriptions' => "Type : S R
            Size : 50x50 cm
            Class : C",
            'photo' => "image/DEEP DARK GREY type S R size 50x50 cm class C.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "DEEP GREY",
            'descriptions' => "Type : S R
            Size : 50x50 cm
            Class : B",
            'photo' => "image/DEEP GREY type SR size 50x50 cm class B .png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "DEEP IVORY",
            'descriptions' => "Type : S R
            Size : 50x50 cm
            Class : B",
            'photo' => "image/DEEP IVORY type S R size 50x50 cm class B.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "DEEP WHITE",
            'descriptions' => "Type : S R
            Size : 50x50 cm
            Class : B",
            'photo' => "image/DEEP WHITE type S R size 50x50 cm class B.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "BALI GARDEN BROWN",
            'descriptions' => "Type : M E
            Size : 40x40 cm
            Class : B",
            'photo' => "image/BALI GARDEN BROWN type M E size 40x40cm class B.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "AMIRA GREEN",
            'descriptions' => "Type : G S
            Size : 25x40 cm
            Class : C",
            'photo' => "image/AMIRA GREEN type G S size 25x40 cm class C.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "NAMIRA PINK",
            'descriptions' => "Type : G S R
            Size : 25x40 cm
            Class : A",
            'photo' => "image/NAMIRA PINK type G S R size 25x40 cm class A.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "NAMIRA WHITE",
            'descriptions' => "Type : G S
            Size : 25x40 cm
            Class : A",
            'photo' => "image/NAMIRA WHITE type G S size 25x40 cm class A.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "ASANO WHITE",
            'descriptions' => "Type : G S
            Size : 25x40 cm
            Class : A",
            'photo' => "image/ASANO WHITE type G S size 25x40 cm class A .png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "GARDEN BIRD GREEN",
            'descriptions' => "Type : G S
            Size : 25x40 cm
            Class : C",
            'photo' => "image/GARDEN BIRD GREEN type G S size 25x40 cm class C.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "ARABELLA WHITE",
            'descriptions' => "Type : G CG
            Size : 60x60 cm",
            'photo' => "image/ARABELLA WHITE type G CG size 60x60 cm .png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "ACACIA BEIGE",
            'descriptions' => "Type : M
            Size : FT 50x50 cm",
            'photo' => "image/ACACIA BEIGE type M size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "ASH BROWN",
            'descriptions' => "Type : M P R
            Size : FT 50x50 cm",
            'photo' => "image/ASH BROWN type M P R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PATIOS BROWN",
            'descriptions' => "Type : M A
            Size : FT 50x50 cm",
            'photo' => "image/PATIOS BROWN type M A size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PETERHOF BROWN",
            'descriptions' => "Type : GR
            Size : FT 50x50 cm",
            'photo' => "image/PETERHOF BROWN type GR FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "MARMO WHITE",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/MARMO WHITE type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "MIRACLE GREY",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/MIRACLE GREY type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "MIRACLE BEIGE",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/MIRACLE BEIGE type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PATIOS (M) BROWN",
            'descriptions' => "Type : M E A
            Size : FT 50x50 cm",
            'photo' => "image/PATIOS (M) BROWN type M E A size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "TRAVERTINE CREMA",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/TRAVERTINE CREMA type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "BARDIGLIO GREY",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/BARDIGLIO GREY type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "ADEN BEIGE",
            'descriptions' => "Type : M E A
            Size : FT 50x50 cm",
            'photo' => "image/ADEN BEIGE type M E A size FT 50x50 cm .png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "CASTLE ROCK BROWN",
            'descriptions' => "Type : M E A
            Size : FT 50x50 cm",
            'photo' => "image/CASTLE ROCK BROWN type M E A size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PATIOS (M) GREY",
            'descriptions' => "Type : M E A
            Size : FT 50x50 cm",
            'photo' => "image/PATIOS (M) GREY type M E A size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PATIOS GREY",
            'descriptions' => "Type : M A
            Size : FT 50x50 cm",
            'photo' => "image/PATIOS GREY type M A size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PECAN WOOD BROWN",
            'descriptions' => "Type : M R
            Size : FT 50x50 cm",
            'photo' => "image/PECAN WOOD BROWN type M R size FT 50x50 cm .png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PECAN WOOD BEIGE",
            'descriptions' => "Type : M R
            Size : FT 50x50 cm",
            'photo' => "image/PECAN WOOD BEIGE type M R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PORTER DARK GREY",
            'descriptions' => "Type : M
            Size : FT 50x50 cm",
            'photo' => "image/PORTER DARK GREY type M size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "LILOU GREY",
            'descriptions' => "Type : M
            Size : FT 50x50 cm",
            'photo' => "image/LILOU GREY type M size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KHALANI BROWN",
            'descriptions' => "Type : M
            Size : FT 50x50 cm",
            'photo' => "image/KHALANI BROWN type M size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "KANAYA BROWN",
            'descriptions' => "Type : M
            Size : FT 50x50 cm",
            'photo' => "image/KANAYA BROWN type M size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "HUDSON BROWN",
            'descriptions' => "Type : M
            Size : FT 50x50 cm",
            'photo' => "image/HUDSON BROWN type M size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "ALCAZAR BROWN",
            'descriptions' => "Type : M R
            Size : FT 50x50 cm",
            'photo' => "image/ALCAZAR BROWN type M R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "STARK GREY",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm
            Class : A",
            'photo' => "image/STARK GREY type G R size FT 50x50 cm class A.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "HERMOSA BLACK",
            'descriptions' => "Type : G
            Size : FT 50x50 cm",
            'photo' => "image/HERMOSA BLACK type G size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "ESME BEIGE",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/ESME BEIGE type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "WOOD TWIST BROWN",
            'descriptions' => "Type : M R
            Size : FT 50x50 cm",
            'photo' => "image/WOOD TWIST BROWN type M R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "SANDWOOD BROWN",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/SANDWOOD BROWN type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "AFGHAN BEIGE",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/AFGHAN BEIGE type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "SHUFFLE STONE BROWN",
            'descriptions' => "Type : M E A R
            Size : FT 50x50 cm
            Class : A",
            'photo' => "image/SHUFFLE STONE BROWN type M E A R size FT 50x50 cm class A.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "SHUFFLE STONE GREY",
            'descriptions' => "Type : M E A R
            Size : FT 50x50 cm
            Class : A",
            'photo' => "image/SHUFFLE STONE GREY type M E A R size FT 50x50 cm class A.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "BOTANICAL GREY",
            'descriptions' => "Type : M R
            Size : FT 50x50 cm
            Class : A",
            'photo' => "image/BOTANICAL GREY type M R size FT 50x50 cm class A.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "LUCAS BROWN",
            'descriptions' => "Type : M E A R
            Size : FT 50x50 cm
            Class : A",
            'photo' => "image/LUCAS BROWN type M E A R size FT 50x50 cm class A .png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PEDRO CORAL",
            'descriptions' => "Type : M E
            Size : FT 50x50 cm
            Class : A",
            'photo' => "image/PEDRO CORAL type M E size FT 50x50 cm class A.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "AKIRA BROWNL",
            'descriptions' => "Type : M E A R
            Size : FT 50x50 cm
            Class : A",
            'photo' => "image/AKIRA BROWN type M E A R size FT 50x50 cm class A.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "BEVERLEY GREYL",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/BEVERLEY GREY type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "IRENE WHITE",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm
            Class : A",
            'photo' => "image/IRENE WHITE type G R size FT 50x50 cm class A .png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "JISHU GREY",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/JISHU GREY type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "TASMANIA BEIGE",
            'descriptions' => "Type : M R
            Size : FT 50x50 cm",
            'photo' => "image/TASMANIA BEIGE type M R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "SAMOA BEIGE",
            'descriptions' => "Type : M A
            Size : FT 50x50 cm",
            'photo' => "image/SAMOA BEIGE type M A size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PUERTO GREY",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/PUERTO GREY type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PUERTO GREEN",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/PUERTO GREEN type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PUERTO BEIGE",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/PUERTO BEIGE type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "MATOA GREY",
            'descriptions' => "Type : G R
            Size : FT 50x50 cm",
            'photo' => "image/MATOA GREY type G R size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "VERMONT GREY",
            'descriptions' => "Type : G
            Size : FT 50x50 cm",
            'photo' => "image/VERMONT GREY type G size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "NAPOLI CREMA",
            'descriptions' => "Type : G P R
            Size : WT 30x60 cm",
            'photo' => "image/NAPOLI CREMA type G P R size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "MAVIS BROWN",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/MAVIS BROWN type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "BOREAL BLACK",
            'descriptions' => "Type : G
            Size : FT 50x50 cm",
            'photo' => "image/BOREAL BLACK type G size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "BOREAL BLUE",
            'descriptions' => "Type : G
            Size : FT 50x50 cm",
            'photo' => "image/BOREAL BLUE type G size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "VERMONT BEIGE",
            'descriptions' => "Type : G
            Size : FT 50x50 cm",
            'photo' => "image/VERMONT BEIGE type G size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "CAROL",
            'descriptions' => "Type : M
            Size : FT 50x50 cm",
            'photo' => "image/CAROL type M size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "CARLOS BEIGE",
            'descriptions' => "Type : M
            Size : FT 50x50 cm",
            'photo' => "image/CARLOS BEIGE type M size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "CARLOS WHITE",
            'descriptions' => "Type : M
            Size : FT 50x50 cm",
            'photo' => "image/CARLOS WHITE type M size FT 50x50 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "HEIDI BROWN",
            'descriptions' => "Type : M
            Size : WT 30x60 cm",
            'photo' => "image/HEIDI BROWN type M size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PRAGUE DECO BEIGE",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/PRAGUE DECO BEIGE type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "NORWAY BEIGE",
            'descriptions' => "Type : M P R
            Size : WT 30x60 cm",
            'photo' => "image/NORWAY BEIGE type M P R size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "LEOPARD DECO CREMA",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/LEOPARD DECO CREMA type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "NARINDA DECO GREY",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/NARINDA DECO GREY type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "NARINDA GREY",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/NARINDA GREY type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "REMINI GREY",
            'descriptions' => "Type : G E
            Size : WT 30x60 cm",
            'photo' => "image/REMINI GREY type G E size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PRAGUE DECO GREY",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/PRAGUE DECO GREY type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PRAGUE GREY",
            'descriptions' => "Type : G R
            Size : WT 30x60 cm",
            'photo' => "image/PRAGUE GREY type G R size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PRAGUE BEIGE",
            'descriptions' => "Type : G R
            Size : WT 30x60 cm",
            'photo' => "image/PRAGUE BEIGE type G R size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "PALMBAY GREY",
            'descriptions' => "Type : G R
            Size : WT 30x60 cm",
            'photo' => "image/PALMBAY GREY type G R size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "NORWAY BROWN",
            'descriptions' => "Type : M P R
            Size : WT 30x60 cm",
            'photo' => "image/NORWAY BROWN type M P R size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "NAPOLI LUSTER CREMA",
            'descriptions' => "Type : G P R
            Size : WT 30x60 cm",
            'photo' => "image/NAPOLI LUSTER CREMA type G P R size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "NAPOLI DECO CREMA",
            'descriptions' => "Type : G P R
            Size : WT 30x60 cm",
            'photo' => "image/NAPOLI DECO CREMA type G P R size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "BERLY WHITE",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/BERLY WHITE type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "SWEET PURPLE",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/SWEET PURPLE type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "OAKLEY",
            'descriptions' => "Type : M
            Size : WT 30x60 cm",
            'photo' => "image/OAKLEY type M size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "ALISSA",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/ALISSA type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "DEVON WHITE",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/DEVON WHITE type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "IGLO WHITE",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/IGLO WHITE type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "REMY LIGHT BROWN",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/REMY LIGHT BROWN type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "REMY DARK BROWN",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/REMY DARK BROWN type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "BARRY",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/BARRY type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "DAISY LILAC",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/DAISY LILAC type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "QUINN ",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/QUINN type G size WT 30x60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "LEGO DOT ",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/LEGO DOT type G size WT 30X60 cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "CANNA",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/CANNA type G size WT 30x60cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([

            'name' => "ALISAA EMB",
            'descriptions' => "Type : G
            Size : WT 30x60 cm",
            'photo' => "image/ALISAA EMB type G size WT 30x60cm.png",
            'category_id' => 1,
            'brand_id' => 1
        ]);


    }
}
