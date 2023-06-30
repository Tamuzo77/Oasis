<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use Illuminate\Http\Request;

class EspaceRecruteurController extends Controller
{
    //
    public function espaceRecruteur() {
        $emplois = Emploi::with(['ville', 'recruteur'])->latest()->where('visible', true)->get();
        return view ('users/espaceRecruteur', compact('emplois'));
    }
}
