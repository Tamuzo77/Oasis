<?php

namespace App\Http\Controllers\Admin;

use App\Models\Emploi;
use Illuminate\Http\Request;
use App\Services\EmploiService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class EmploiController extends Controller
{
    //

    public function create()
    {
        return \view('admin.espace_emploi.emplois.create');
    }

    public function store(Request $request)
    {
        (new EmploiService())->store($request);
        return redirect()->route('admin.emplois')->with('success', "Emploi(s) crée(s) avec succès ");

    }

    public function visibleOrNot($slug)
    {
       $slug =  Crypt::decrypt($slug);
       $emploi = Emploi::where('slug', $slug)->get()->first();
        $emploi->visible = !$emploi->visible;

        if($emploi->visible)
        {
            $state = 'visible';
        }else {
            $state = 'non visible';
        }
        $emploi->save();

        return \redirect()->back()->with('warning', " Emploi $emploi->libelle est $state");

    }

    public function destroy($slug)
    {
        $slug =  Crypt::decrypt($slug);
        $emploi = Emploi::where('slug', $slug)->get()->first();

        $emploi->delete();
        return redirect()->route('admin.emplois')->with('success', "Suppression d'un emploi effectuée avec succès");
       

    }

    public function show($slug)
    {
        $slug =  Crypt::decrypt($slug);
        $emploi = Emploi::where('slug', $slug)->with(['recruteur', 'department', 'commune', 'arrondissement', 'ville'])->get()->first();

        return \view('admin.espace_emploi.details', compact('emploi'));

    }
}
