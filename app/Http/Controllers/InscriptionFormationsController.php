<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionFormationsController extends Controller
{
    //
    public function inscriptionFormations () {
        return view ('users/inscriptionFormations');
    }
}
