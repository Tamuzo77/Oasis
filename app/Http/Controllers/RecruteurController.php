<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use Illuminate\Http\Request;

class RecruteurController extends Controller
{
    //

    public function store(Request $request)
    {
        $ad = $request->validate([
            'rue' => '',
            'ville' => 'required|string',
            'pays' => 'required|string',
            'code_postal' => 'required|string',
        ]);
        $adresse = Adresse::create($ad);
        $rec = $request->validate([
            'firstname' => 'required|min:2|string',
            'lastname' => 'required|min:2|string',
            'email' => 'required|email',
            'tel' => 'required|phone:BJ',
            'picture' => '',
            'adresse_id' => '',
        ]);

        $recruteur = new Recruteur();
        $recruteur->firstname = $rec['firstname'];
        $recruteur->lastname = $rec['lastname'];
        $recruteur->email = $rec['email'];
        $recruteur->tel = $rec['tel'];
        $recruteur->picture = $rec['picture'];
        $recruteur->adresse_id = $adresse->id;
        $recruteur->save();

        return $recruteur;
    }
}
