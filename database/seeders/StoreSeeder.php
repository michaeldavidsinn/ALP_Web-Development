<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     protected $fillable = ['store_name','location'];
    public function run(): void
    {
        DB::table('stores')->insert([

            'store_name' => "Toko Perdana Mandiri",
            'location' => "Jl. Ruhui Rahayu No.88a, gn. Bahagia, Kecamatan Balikpapan Selatan, 76125"
        ]);

        DB::table('stores')->insert([

            'store_name' => "Toko Central Keramik BB",
            'location' => "Depan Masjid Namirah, Ruko Balikpapan Baru, Jl. Little China No. 31 Blok AB - 7, Damai, Kecamatan Balikpapan Kota"
        ]);

        DB::table('stores')->insert([

            'store_name' => "Toko Central Keramik SPG",
            'location' => "Jl. Marsma R. Iswahyudi, Sepinggan, Kecamatan Balikpapan Selatan"
        ]);

        DB::table('stores')->insert([

            'store_name' => "Toko Maju Jaya Keramik",
            'location' => "Jl. Jend A Yani, RT 13-15, Gunungsari Ilir, Kecamatan Balikpapan Tengah"
        ]);
    }
}
