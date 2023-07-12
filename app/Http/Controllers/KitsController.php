<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitsController extends Controller
{
    //
    public function kits() {
        return view ('users/kits');
    }
}
