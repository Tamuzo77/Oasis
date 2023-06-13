<?php

namespace App\Http\Controllers\Admin;

use App\Models\CategoryNew;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class CategoryNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = CategoryNew::latest()->paginate(15);
        $increment = 1;
        return \view('admin.actualites.categories.index', compact('categories', 'increment'));
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
        $attributes = request()->validate([
            'name' => 'required|string|min:2|max:12',
            'archived' => 'required|boolean'
        ]);
        $attributes['slug'] = Str::slug($attributes['name']);
        CategoryNew::create($attributes);
        
        return \redirect()->back()->with('success', 'Catégorie crée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        //
        $slug =  Crypt::decrypt($slug);
        $category = CategoryNew::where('slug',$slug)->get()->first();
        $acts = $category->actualites;
        
        return \view('admin.actualites.categories.show', compact('acts'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryNew $categoryNew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($slug)
    {
        //
       $slug =  Crypt::decrypt($slug);
       $category = CategoryNew::where('slug',$slug)->get()->first();
       $state = 'Activé';
       $category->archived = !$category->archived;

       if($category->archived)
       {
        $state='Désactivé';
       }
       $category->save();
       return \redirect()->back()->with('warning', "La catégorie $category->name est maintenant $state ! " );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        //
        $slug =  Crypt::decrypt($slug);
        $category = CategoryNew::where('slug',$slug)->get()->first();
        $category->delete();
        return \redirect()->back()->with('success', 'Catégorie supprimé avec success');
       
    }
}
