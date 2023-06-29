<?php

namespace Database\Seeders;

use App\Models\Ville;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Ville::create([
            'name' => 'Ville 1',
        ]);

        Ville::create([
            'name' => 'Ville 1',
        ]);

        Ville::create([
            'name' => 'Ville 1',
        ]);

        Ville::create([
            'name' => 'Ville 2',
        ]);

    }
}
