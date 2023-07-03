<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status;
use App\Models\Formation;
use App\Models\CategoryForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormationRequest;
use App\Http\Requests\UpdateFormationRequest;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::with('categoryForm')->latest()->get();
        return \view('admin.formations.index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryForm::latest()->get(['id', 'name']);
        $statuses = Status::latest()->get(['id', 'libelle']);

        return \view('admin.formations.create', compact('categories', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormationRequest $request)
    {
        Formation::create($request->validated() + ['slug' => \Str::slug($request->name), 'session' => 'session']);
        return \redirect()->route('admin.formations.index')->with('success', 'Formation crée avec succès');
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
        $statuses = Status::latest()->get(['id', 'libelle']);

        return \view('admin.formations.edit', compact('categories', 'formation', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormationRequest $request,  $slug)
    {
        $formation = Formation::where('slug', $slug)->get()->first();
        $formation->update($request->validated());
        return \redirect()->route('admin.formations.index')->with('success', 'Modification effectuée avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $formation = Formation::where('slug', $slug)->get()->first();
        $formation->delete();
        return \redirect()->back()->with('success', 'Formation supprimée avec success');

    }
    public function activeOrNot($slug)
    {
        
        $formation = Formation::where('slug', $slug)->get()->first();
        $formation->status_id == 1 ? $formation->status_id = 2 : $formation->status_id =1;
        if($formation->status_id == 1)
        {
            $state = "Activé";
        }

        if($formation->status_id == 2)
        {
            $state = "Inactivé";
        }
        $formation->save();

        return redirect()->back()->with('warning', "La formation $formation->name est désormais $state !");

    }
}
