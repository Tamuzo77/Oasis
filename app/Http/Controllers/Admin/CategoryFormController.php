<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryForm;
use Illuminate\Http\Request;

class CategoryFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CategoryForm::latest()->paginate(15);
        $increment = 1;
        return \view('admin.formations.categories.index', compact('categories', 'increment'));
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
    public function store(Request $request)
    {
        
        $attributes = $request->validate([
            'name' => 'required|string|min:2|max:12',
            'archived' => 'required|boolean'
        ]);
        $attributes['slug'] = \Str::slug($attributes['name']);
        CategoryForm::create($attributes);
        return \redirect()->back()->with('success', 'Catégorie crée avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryForm $categoryForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryForm $categoryForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryForm $categoryForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $slug)
    {
        $slug =  \Crypt::decrypt($slug);
        $category = CategoryForm::where('slug',$slug)->get()->first();
        $category->delete();
        return \redirect()->back()->with('success', 'Catégorie supprimé avec success');
       
    }
}
