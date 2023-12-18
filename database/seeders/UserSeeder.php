<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            'name' => 'Michael DS',
            'email' => 'michaelsin04@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'role_id' => '1',
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10)
        ]);

        DB::table('users')->insert([

            'name' => 'Michelle Ashley',
            'email' => 'micheleesin04@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('87654321'),
            'role_id' => '2',
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10)
        ]);
    }
}
