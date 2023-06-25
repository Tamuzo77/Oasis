<?php

namespace App\Http\Controllers\Admin;

use App\Models\Structure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StructureController extends Controller
{
    //

    public function index()
    {
        $structures = Structure::all();
        return \view('admin.espace_emploi.structures.index', compact('structures'));
    }

    public function show($structureID)
    {
        $structureID = \Crypt::decrypt($structureID);
        $structure = Structure::findOrFail($structureID)->with('emploi');

        return \view('admin.espace_emploi.structures.show', compact('structure'));
    }

    public function destroy($structureID)
    {
        $structureID = \Crypt::decrypt($structureID);
        $structure = Structure::findOrFail($structureID);
        $structure->delete();
        return redirect()->back()->with('success', 'Structure deleted successfully');
    }
}
