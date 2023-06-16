<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $statuses = Status::all();
        return \view('admin.p&s.services.create', compact( 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
            //code...
            $attributes = \request()->validate([
                'nom' =>'required|string|min:3|max:80|unique:services,name',
                'description' => 'required|string|min:3',
                'excerpt' => 'required|string|max:200',
                'image' => 'required|image',
                'status_id' =>'required|exists:statuses,id',
            ]);

            $attr = [
                'name' => $attributes['nom'],
                'description' => $attributes['description'],
                'excerpt' => $attributes['excerpt'],
                'status_id' => $attributes['status_id'],
            ];
            $attr['cover_image'] = request()->file('image')->store('servicesStore', 'public');
            $attr['slug'] = Str::slug($attributes['nom']);
            $serv = Service::create($attr);
            return redirect()->route('admin.partenaires&services')->with('success', "Service <strong>$serv->name</strong> crée avec succès !");
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        //

        $slug = Crypt::decrypt($slug);
        $serv = Service::where('slug', $slug)->get()->first();
        $statuses = Status::all();
        return \view('admin.p&s.services.show', compact('serv', 'statuses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        //
        $slug = Crypt::decrypt($slug);
        $serv = Service::where('slug', $slug)->get()->first();
        $statuses = Status::all();
        return \view('admin.p&s.services.edit', compact('serv', 'statuses'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update($slug)
    {
        //
        $slug = Crypt::decrypt($slug);
        $serv = Service::where('slug', $slug)->get()->first();
        try {
            //code...
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
            //throw $th;
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
