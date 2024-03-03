<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'Malaysia']);
        Country::create(['name' => 'United Kingdom']);
        City::create(['country_id' => '1 ','name' => 'Puchong']);
        City::create(['country_id' => '1 ','name' => 'Shah Alam']);
        City::create(['country_id' => '1 ','name' => 'Klang']);
        City::create(['country_id' => '1 ','name' => 'Subang']);
        City::create(['country_id' => '1 ','name' => 'Puchong']);
        City::create(['country_id' => '2 ','name' => 'London']);
        City::create(['country_id' => '2 ','name' => 'Liverpool']);

        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Vue JS', 'slug' => 'Vue JS']);
        Tag::create(['name' => 'Livewire', 'slug' => 'Livewire']);
    }
}
