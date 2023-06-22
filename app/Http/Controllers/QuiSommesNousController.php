<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuiSommesNousController extends Controller
{
    //
    public function quisommesnous() {
        return view ('users/quisommesnous');
    }
}
