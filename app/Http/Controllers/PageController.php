<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function view($pageHref)
    {
        $page = Page::with('imageModels')->where('href', "/$pageHref")->get()->first();
        return view("user.$page->view", compact('page'));
    }
}
