<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Actions\DecryptAndFind;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\StoreServiceRequest;

class ServiceController extends Controller
{
    public function create()
    {
       // Gate::allows('admin');
        $statuses = Status::all();
        return \view('admin.p&s.services.create', compact( 'statuses'));
    }

    public function store(StoreServiceRequest $request)
    {
            $serv = Service::create($request->validated());
            return redirect()->route('admin.partenaires&services')->with('success', "Service <strong>$serv->name</strong> crée avec succès !");
        
        
    }

    public function show($slug)
    {
        $serv = (new DecryptAndFind())->handle(Service::class, $slug);
        $statuses = Status::all();
        return \view('admin.p&s.services.show', compact('serv', 'statuses'));
    }

    public function edit($slug)
    {
        $serv = (new DecryptAndFind())->handle(Service::class, $slug);
        $statuses = Status::all();
        return \view('admin.p&s.services.edit', compact('serv', 'statuses'));

    }

    public function update($slug, StoreServiceRequest $request)
    {
        //A traiter plus tard
        $serv = (new DecryptAndFind())->handle(Service::class, $slug);
        try {
            $attributes = \request()->validate([
                'nom' =>'required|string|min:3|max:80|unique:services,name',
                'description' => 'required|string|min:3',
                'excerpt' => 'required|string|max:200',
                'status_id' =>'required|exists:statuses,id',
            ]);

            $attr = [
                'name' => $attributes['nom'],
                'description' => $attributes['description'],
                'excerpt' => $attributes['excerpt'],
                'status_id' => $attributes['status_id'],
            ];
            if(request()->file('image') ?? false)
            {
                $attr['cover_image'] = request()->file('image')->store('servicesStore', 'public');
            }

            
            return redirect()->back()->with('success', "Service <strong>$serv->name</strong> crée avec succès !");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function destroy($slug)
    {
        $serv = (new DecryptAndFind())->handle(Service::class, $slug);
        $serv->delete();
        return redirect()->back()->with("success","Service supprimé avec succès !");
    }

    public function activeOrNot($slug)
    {
        $serv = (new DecryptAndFind())->handle(Service::class, $slug);
        $serv->status_id == 1 ? $serv->status_id = 2 : $serv->status_id =1;
        if($serv->status_id == 1)
        {
            $state = "Activé";
        }

        if($serv->status_id == 2)
        {
            $state = "Inactivé";
        }
        $serv->save();

        return redirect()->back()->with('warning', "Le service $serv->title est désormais $state !");

    }
}
