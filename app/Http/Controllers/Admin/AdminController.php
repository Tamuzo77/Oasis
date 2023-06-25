<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Emploi;
use App\Models\Structure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\EmploiService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //

    public function dashboard()
    {
        $notifications = auth()->user()->unreadNotifications;
        return \view('admin/dashboard', compact('notifications'));
    }

    public function markNotification(Request $request)
    {
        \auth()->user()
        ->unreadNotifications
        ->when($request->input('id'), function($query) use ($request){
            return $query->where('id', $request->input('id'));
        })
        ->markAsRead();

        return response()->noContent();
    }

    public function partenaireService()
    {
        return \view('admin.p&s.index');
    }

    public function recruteurs()
    {
        return \view('admin.espace_emploi.recruteurs');
    }

    public function emplois()
    {
        $emplois = Emploi::latest()->with(['ville', 'recruteur'])->get();
        return \view('admin.espace_emploi.emplois.index', compact('emplois'));
    }

    public function emplois_create()
    {
        return \view('admin.espace_emploi.emplois.create');
    }

    public function store(Request $request)
    {
        (new EmploiService())->store($request);
        return redirect()->route('admin.emplois')->with('success', "Emploi(s) crée(s) avec succès ");

    }
}
