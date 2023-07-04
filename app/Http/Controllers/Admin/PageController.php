<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\ImageModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePageRequest;

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
        $images = ImageModel::all();
        $page = Page::where('href', "/$pageHref")->with('imageModels')->get()->first();
        $pages = Page::where('href',  null)->get();
        return view('admin.pages.view', compact('page', 'images', 'pages'));
    }

    public function store()
    {

    }

    public function update(UpdatePageRequest $request, $pageHref)
    {
        $page = Page::where('href', "/$pageHref")->get()->first();
        $page->update($request->validated()+ [
            'toggled' => $request->parent_id ? true : false,
        ]);
        $images = $request->images;

        $page->imageModels()->sync($images);

        return \redirect()->route('admin.pages-all')->with('success','Modification effectuée avec succès');
    }
}
