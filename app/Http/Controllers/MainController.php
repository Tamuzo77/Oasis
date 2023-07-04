<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function home()
    {
        $page = Page::where('href', '/home')->get()->first();
        return \view("user.$page->view", compact('page'));
    }

    public function qsn()
    {
        return \view('user.qsn');
    }

    public function reseauRac()
    {
        return \view('user.reseauRac');
    }

    public function cvTheque()
    {
        return \view('user.cvTheque');
    }
}
