<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilConnexionController extends Controller
{
    //
    public function accueilConnexion() {
        return view ('users/accueilConnexion');
    }
}
