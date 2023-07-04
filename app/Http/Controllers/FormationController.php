<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //
    public function formation () {
        return view ('users/formation');
    }

    public function show($slug)
    {
        $formation = Formation::where('slug', $slug)->first();
        return \view('user.formation', compact('formation'));
    }
}
