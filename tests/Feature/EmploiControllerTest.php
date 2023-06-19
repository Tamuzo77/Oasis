<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmploiControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testStore(): void
    {
        $response = $this->get('/');
        $request = [
            'libelle' => 'Libelle',
            'description'=>'Description',
            'rue' =>'203',
            'ville' =>'Cotonou',
            'pays' =>'Benin',
            'code_postal' =>'BP 206',
            'firstname' =>'First Name',
            'lastname' =>'Last Name',
            'email' =>'email@example.com',
            
        ];

        $response = $this->post(route('admin.emploi-store', $request));
        $response->assertStatus(200);
    }
}
