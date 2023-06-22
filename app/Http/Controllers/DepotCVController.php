<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepotCVController extends Controller
{
    //
    public function dépôtCV () {
        return view ('users/dépôtCV');
    }
}

