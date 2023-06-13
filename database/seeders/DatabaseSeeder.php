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
        // \App\Models\User::factory(10)->create();
        \App\Models\Actualite::truncate();
        \App\Models\User::factory()->create([
             'name' => 'Tamuzo',
             'username' => 'Tamuzo77',
             'email' => 'tamuzo77@example.com',
             'password' =>'tamuzo77' ,
         ]);

        \App\Models\Status::factory()->create([
            'libelle' => 'Actif'
        ]);

        \App\Models\Status::factory()->create([
            'libelle' => 'Inactif'
        ]);

        \App\Models\Actualite::factory(3)->create();
    }
}
