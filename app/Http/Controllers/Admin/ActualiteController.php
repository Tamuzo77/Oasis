<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status;
use App\Models\Actualite;
use App\Models\CategoryNew;
use Illuminate\Http\Request;
use App\Services\ActusService;
use App\Actions\DecryptAndFind;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\StoreActusRequest;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UpdateActusRequest;

class ActualiteController extends Controller
{

    public $actuservice = ActusService::class;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = CategoryNew::latest()->get(['id', 'name']);
        $statuses = Status::latest()->get(['id', 'libelle']);
        $actualites = Actualite::with(['categoryNew', 'status'])->latest()->filter(request(['search','category', 'status']))->paginate(8)->withQueryString();
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
        $categories = CategoryNew::latest()->get(['id', 'name']);
        $statuses = Status::latest()->get(['id', 'libelle']);
        return view('admin.actualites.create', compact('categories', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActusRequest $request, ActusService $actuservice)
    {
        $actuservice->create($request->validated());

        return Redirect::route('admin.actualites-grid')->with('success', 'Actualité crée avec succès');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Actualite $actualite)
    {
        //A faire bientôt
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        //
        $actus = (new DecryptAndFind())->handle(Actualite::class, $slug);
        $categories = CategoryNew::latest()->get(['id', 'name']);
        $statuses = Status::latest()->get(['id', 'libelle']);
        return view('admin.actualites.edit', compact('actus', 'categories', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($slug, UpdateActusRequest $request, ActusService $service)
    {
        $service->update($slug, $request->validated());
        return Redirect::route('admin.actualites-grid')->with('success', 'Actualité modifiée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug, ActusService $service)
    {
        $service->delete($slug);
        return \redirect()->back()->with('success', 'Actualité supprimé avec success');
    }

    public function activeOrNot($slug)
    {
        
        $actus = (new DecryptAndFind())->handle(Actualite::class ,$slug);
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
