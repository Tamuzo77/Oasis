<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function view($pageHref)
    {
        $page = Page::where('href', "/$pageHref")->get()->first();
        return view('user.pages.view', compact('page'));
    }
}
