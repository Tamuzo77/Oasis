<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partenaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return \view('');
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
        try {
            //code...
            $attributes = request()->validate([
                'nom' => 'required|string|min:2',
                'logo' => 'required|image',
                'url' => '',
            ]);
            $attr = [
                'name' => $attributes['nom'],
                'url' => $attributes['url'],
            ];
            $attr['logo'] = request()->file('logo')->store('partenaireStore', 'public');

    
            $partenaire = Partenaire::create($attr);
            return \redirect()->back()->with('success', "Nous avons le plaisir d'enregistrer  <strong>$partenaire->name</strong> comme nouveau partenaire d'OASIS ");
        } catch (\Throwable $th) {
            return \redirect()->back()->with('failure', $th->getMessage());
        }
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Partenaire $partenaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partenaire $partenaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partenaire $partenaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            //code...
            $id = Crypt::decrypt($id);
            $partenaire = Partenaire::where('id', $id)->get()->first();
            $partenaire->delete();
            return \redirect()->back()->with('success', 'Patenariat Supprimé Avec Succès !');
        } catch (\Throwable $th) {
            //throw $th;
            return \redirect()->back()->with('failure', $th->getMessage());

        }
        

    }
}
