<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status;
use App\Models\Actualite;
use App\Models\CategoryNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = CategoryNew::all();
        $statuses = Status::all();
        $actualites = Actualite::latest()->filter(request(['search','category', 'status']))->paginate(8)->withQueryString();
        if(\request()->is('admin/actualites-list'))
        {
            return \view('admin.actualites.list', compact('actualites','categories','statuses'));
        }elseif(\request()->is('admin/actualites-grid'))
        {
           return \view('admin.actualites.grid', compact('actualites','categories','statuses'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = CategoryNew::all();
        $statuses = Status::all();
        return view('admin.actualites.create', compact('categories', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        $actu = new Actualite();
        $attributes = request()->validate([
            'title' => 'required|min:3|unique:actualites,title',
            'content' => 'required|min:3',
            'status_id' => 'required|exists:statuses,id',
            'categoryNew_id' => 'required|exists:category_news,id',
            'cover_image' => $actu->exists ?['cover_image'] : 'required|image',
        ]);
        $attributes['slug'] = \Str::slug($attributes['title']);
        $attributes['author'] = "OASIS";
        $attributes['cover_image'] = request()->file('cover_image')->store('actualitesStore', 'public');
        Actualite::create($attributes);

        return Redirect::route('admin.actualites-grid')->with('success', 'Actualité crée avec succès');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Actualite $actualite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        //
        $slug =  Crypt::decrypt($slug);
        $actus = Actualite::where('slug',$slug)->get()->first();
        $categories = CategoryNew::all();
        $statuses = Status::all();
        return view('admin.actualites.edit', compact('actus', 'categories', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($slug)
    {
        //
        $slug =  Crypt::decrypt($slug);
        $actus = Actualite::where('slug',$slug)->get()->first();
        $attributes = request()->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:3',
            'status_id' => 'required|exists:statuses,id',
            'cover_image' => 'image',
            'categoryNew_id' => 'required|exists:category_news,id',
        ]);

        if($attributes['cover_image'] ?? false)
        {
            $attributes['cover_image'] = request()->file('cover_image')->store('actualitesStore', 'public');
        }
        $actus->update($attributes);

        return Redirect::route('admin.actualites-grid')->with('success', 'Actualité modifiée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        //
        $slug =  Crypt::decrypt($slug);
        $actus = Actualite::where('slug',$slug)->get()->first();
        $actus->delete();
        return \redirect()->back()->with('success', 'Actualité supprimé avec success');
    }

    public function activeOrNot($slug)
    {
        
        $slug =  Crypt::decrypt($slug);
        $actus = Actualite::where('slug',$slug)->get()->first();
        $actus->status_id == 1 ? $actus->status_id = 2 : $actus->status_id =1;
        if($actus->status_id == 1)
        {
            $state = "Activé";
        }

        if($actus->status_id == 2)
        {
            $state = "Inactivé";
        }
        $actus->save();

        return redirect()->back()->with('warning', "L'actualité $actus->title est désormais $state !");

    }
}
