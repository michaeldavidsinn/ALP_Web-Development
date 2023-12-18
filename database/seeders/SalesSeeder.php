<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sales')->insert([
            'sales_name' => "Yunus",
            'sales_contact' => "081250997296"
        ]);

        DB::table('sales')->insert([
            'sales_name' => "Adi",
            'sales_contact' => "085108111007"
        ]);
    }
}
