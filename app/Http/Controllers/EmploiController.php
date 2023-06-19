<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmploiController extends Controller
{
    //

    public function index()
    {
        \dd('ok');
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        \dd('ok');
        $recruteurController = new RecruteurController();
        $recruteur =  $recruteurController->store($request);

        $attributes = $request->validate([
            'libelle' => 'required|min:3',
            'description' => 'required|min:8',
        ]);

        $attributes['recruteur_id'] = $recruteur->id;

        Emploi::create($attributes);
        
    }
}
