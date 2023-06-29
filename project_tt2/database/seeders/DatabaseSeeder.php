<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'test1',
            'email' => 'test1@test.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // \App\Models\User::factory(5)->create();
        
        // Listing::create([
        //     'title' => 'title 3',
        //     'description' => 'description test',
        //     'email' => 'email@gmail.com',
        //     'author' => 'Rozentāls',
        //     'tags' => 'rozentals,dags'
        // ]);

        // Listing::create([
        //     'title' => 'title 4',
        //     'description' => 'description test2',
        //     'email' => 'email2@gmail.com',
        //     'author' => 'Rozentāls',
        //     'tags' => 'rozentals,darens'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
