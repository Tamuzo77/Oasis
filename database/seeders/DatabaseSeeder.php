<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ville;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\VilleSeeder;
use Spatie\Permission\Models\Role;
use Database\Seeders\CommuneSeeder;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\ArrondissementSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Actualite::truncate();
        $user = \App\Models\User::factory()->create([
             'name' => 'Tamuzo',
             'username' => 'Tamuzo77',
             'email' => 'tamuzo77@example.com',
             'password' =>'tamuzo77' ,
             'is_admin' => 1,
         ]);

         $role = Role::create(
            ['name' => 'Super Admin',]
         );
         $user->assignRole($role);

        \App\Models\Status::factory()->create([
            'libelle' => 'Actif'
        ]);

        \App\Models\Status::factory()->create([
            'libelle' => 'Inactif'
        ]);

        //\App\Models\Actualite::factory(3)->create();
        Ville::factory(10)->create();
    }
}
