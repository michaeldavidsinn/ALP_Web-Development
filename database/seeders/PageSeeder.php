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

            'alamat' => "Jln. Ruhui rahayu no 88,Balikpapan, Kalimantan Timur.",
            'nomor_telepon' => "08125428037",
            'email' => "valma_terena@yahoo.com",
            'jam_operasional' => "09:00-17:00",

        ]);
    }
}
