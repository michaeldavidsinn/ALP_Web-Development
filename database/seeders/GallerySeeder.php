<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846935_0.jpg"
        ]);
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846936_0.jpg"
        ]);
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846941_0.jpg"
        ]);
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846943_0.jpg"
        ]);
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846945_0.jpg"
        ]);
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846946_0.jpg"
        ]);
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846947_0.jpg"
        ]);
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846949_0.jpg"
        ]);
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846938_0.jpg"
        ]);
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846939_0.jpg"
        ]);
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846942_0.jpg"
        ]);
        DB::table('galleries')->insert([

            'gallery_url' => "image/S__9846944_0.jpg"
        ]);

    }
}
