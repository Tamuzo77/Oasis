<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivresController extends Controller
{
    //
    public function livres () {
        return view ('users/livres');
    }
}
