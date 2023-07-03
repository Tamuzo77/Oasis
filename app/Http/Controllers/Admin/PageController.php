<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //

    public function index()
    {
        $pages = Page::where('href', '!=', null)->get();
        return view('admin.pages.all', compact('pages'));
    }

    public function view($pageHref)
    {
        $page = Page::where('href', "/$pageHref")->get()->first();
        return view('admin.pages.view', compact('page'));
    }
}
