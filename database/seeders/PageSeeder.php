<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $accueil = Page::create([
            'title' => 'Accueil',
            'href' => '/home',
            'toggled' => false,
            'header' => "Bienvenue sur la plateforme OASIS. Nous vous offrons un moyen facile et aisé pour trouver et offrir des emplois au Bénin. Profitez de votre expérience sur notre plateforme",
            'midContent' => "OASIS Consulting ",
            'view' => 'home',
        ]);

        $quiSommesNous = Page::create([
            'title' => "Qui Sommes Nous",
            'href' => "/qui-sommes-nous",
            'toggled' => false,
            'header' => 'Qui Sommes',
            'midContent' => "Mid Content of the page",
            'view' => 'qsn'
        ]);

        $reseauRac = Page::create([
            'title' => "Réseau RAC",
            "href" => "/reseau-rac",
            "toggled" => false,
            'view' => 'reseauRac'
        ]);

        $espaceEmploi = Page::create([
            'title' => "Espace Emploi",
            'toggled' => true,
        ]);

        $formation = Page::create([
            'title' =>"Formation",
            'toggled' => true,
        ]);

        $boutique = Page::create([
            'title' =>"Boutique",
            'toggled' => true,
        ]);

        $cvTheque = Page::create([
            'title' => "CV-Thèque",
            'toggled' => false,
            'href' =>"/cv-thèque",
            'parent_id' => 4,
            'view' => 'cvTheque'
        ]);

        $espaceRecruteur = Page::create([
            'title' => "Espace Recruteur",
            'toggled' => false,
            'href' =>"/espace-recruteur",
            'parent_id' => 4,
            'view' => 'espaceRecruteur'
        ]);

        $depotDeCv = Page::create([
            'title' => "Dépôt de Cv",
            'toggled' => false,
            'href' =>"/depot-de-cv",
            'parent_id' => 4,
            'view' => 'depotDeCv'
        ]);

        $fc = Page::create([
            'title' => 'Formations Certifiantes',
            'toggled' => false,
            'href' => "/formations-certifiantes",
            'parent_id' => 5,
            'view' => 'formationsCertifiantes'
        ]);

        $fg = Page::create([
            'title' => 'Formations Gratuites',
            'toggled' => false,
            'href' => "/formations-gratuites",
            'parent_id' => 5,
            'view' => 'formationsGratuites',

        ]);

        $kp = Page::create([
            'title' => 'Kits Professionels',
            'toggled' => false,
            'href' => "/kits-professionels",
            'parent_id' => 6,
            'view' => 'kitsProfessionels',
        ]);

        $livre = Page::create([
            'title' => 'Livres',
            'toggled' => false,
            'href' => "/livres",
            'parent_id' => 6,
            'view' => 'livres',
        ]);
        
    }
}
