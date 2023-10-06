<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create(['email' =>'i@app.com']);
        \App\Models\User::factory(10)->create();

        \App\Models\Clientem::factory(10)->create();

    }
}