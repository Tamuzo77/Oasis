<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status;
use App\Models\Actualite;
use App\Models\CategoryNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

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
        $actualites = Actualite::latest()->filter(request(['search','category', 'status']))->paginate(9)->withQueryString();
        if(\request()->is('admin/actualites-list'))
        {
            \dd('ok');
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

        return redirect()->back()->with('success', 'Actualité crée avec succès');
        
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
    public function edit(Actualite $actualite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actualite $actualite)
    {
        //
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
