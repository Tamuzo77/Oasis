<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function home()
    {
        return \view('user.home');
    }

    public function qsn()
    {
        return \view('user.qsn');
    }

    public function reseauRac()
    {
        return \view('user.reseauRac');
    }
}
