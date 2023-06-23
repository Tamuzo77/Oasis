<?php

namespace Database\Seeders;

use App\Models\Arrondissement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArrondissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Arrondissement::create([
            'name' => 'Arrondissement-1',
            'commune_id' => 1,
        ]);

        Arrondissement::create([
            'name' => 'Arrondissement-1',
            'commune_id' => 2,
        ]);

        Arrondissement::create([
            'name' => 'Arrondissement-1',
            'commune_id' => 3,
        ]);

        Arrondissement::create([
            'name' => 'Arrondissement-1',
            'commune_id' => 4,
        ]);

        Arrondissement::create([
            'name' => 'Arrondissement-1',
            'commune_id' => 5,
        ]);

        Arrondissement::create([
            'name' => 'Arrondissement-1',
            'commune_id' => 6,
        ]);

        Arrondissement::create([
            'name' => 'Arrondissement-1',
            'commune_id' => 7,
        ]);


    }
}
