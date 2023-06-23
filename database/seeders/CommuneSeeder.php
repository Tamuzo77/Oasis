<?php

namespace Database\Seeders;

use App\Models\Commune;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Commune::create([
            'name' => 'Kandi',
            'department_id' => 1,
        ]);
        Commune::create([
            'name' => 'Malanville',
            'department_id' => 1,
        ]);
        Commune::create([
            'name' => 'Abomey-Calavi',
            'department_id' => 2,
        ]);
        Commune::create([
            'name' => 'Ouidah',
            'department_id' => 2,
        ]);

        Commune::create([
            'name' => 'Cotonou',
            'department_id' => 3,
        ]);
        Commune::create([
            'name' => 'Porto-Novo',
            'department_id' => 4,
        ]);

        Commune::create([
            'name' => 'Dangbo',
            'department_id' => 4,
        ]);
    }
}
