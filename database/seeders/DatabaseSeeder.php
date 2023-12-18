<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AboutUs;
use App\Models\Mentor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RolesSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(SalesSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
