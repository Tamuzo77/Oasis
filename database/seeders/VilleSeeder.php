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
            'arrondissement_id' => 1
        ]);

        Ville::create([
            'name' => 'Ville 1',
            'arrondissement_id' => 4
        ]);

        Ville::create([
            'name' => 'Ville 1',
            'arrondissement_id' => 5
        ]);

        Ville::create([
            'name' => 'Ville 2',
            'arrondissement_id' => 5
        ]);

        Ville::create([
            'name' => 'Ville 3',
            'arrondissement_id' => 5
        ]);

        Ville::create([
            'name' => 'Ville 1',
            'arrondissement_id' => 6
        ]);
    }
}
