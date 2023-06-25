<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index() {
        $actus = Actualite::latest()->get();
        return view ('users/index', compact('actus'));
    }
}
