<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspaceRecruteurController extends Controller
{
    //
    public function espaceRecruteur() {
        return view ('users/espaceRecruteur');
    }
}
