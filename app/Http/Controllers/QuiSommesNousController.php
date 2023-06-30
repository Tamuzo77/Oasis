<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;

class QuiSommesNousController extends Controller
{
    //
    public function quisommesnous() {
        $partenaires = Partenaire::latest()->get();
        return view ('users/quisommesnous', compact('partenaires'));
    }
}
