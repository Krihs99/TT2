<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        
        Listing::create([
            'title' => 'title 1',
            'description' => 'description test',
            'email' => 'email@gmail.com'
        ]);

        Listing::create([
            'title' => 'title 2',
            'description' => 'description test2',
            'email' => 'email2@gmail.com'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
