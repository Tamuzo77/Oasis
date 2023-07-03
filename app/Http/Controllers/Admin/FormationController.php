<?php

namespace App\Http\Controllers\Admin;

use App\Models\Formation;
use App\Models\CategoryForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormationRequest;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::latest()->get();
        return \view('admin.formations.index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryForm::latest()->get(['id', 'name']);

        return \view('admin.formations.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormationRequest $request)
    {
        Formation::create($request->validated() + ['slug' => \Str::slug($request->name), 'session' => 'session']);
        return \redirect()->back()->with('success','Formation crée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $formation = Formation::where('slug', $slug)->get()->first();
        $categories = CategoryForm::latest()->get(['id', 'name']);

        return \view('admin.formations.edit', compact('categories', 'formation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formation $formation)
    {
        //
    }
}
