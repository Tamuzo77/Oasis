<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Emploi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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
        $emplois = Emploi::latest()->with(['department', 'commune', 'arrondissement', 'ville', 'recruteur'])->get();
        return \view('admin.espace_emploi.emplois', compact('emplois'));
    }

    public function emplois_create()
    {
        return \view('admin.espace_emploi.create2');
    }

    public function store(Request $request)
    {
        try {
        DB::transaction(function () use ($request) {
            $user = User::updateOrCreate([
                    'email' => $request->user_email,
                ], ['firstname' => $request->user_firstname, 'name' => $request->user_name ,  'tel'=>$request->user_tel , 'age' =>$request->user_age , 'picture' => $request->user_picture->store('espace_emploi', 'public') , 'cv_path'=>$request->user_cv_path?->store('espace_emploi/curriculumVitae', 'public')]
            );

            foreach($request->emplois as $emploi)
            {
                $emploi['user_id'] = $user->id;
                $emploi['slug'] = Str::slug($emploi['libelle']);
                 Emploi::create($emploi);
            }

        });
        return redirect()->route('admin.emplois')->with('success', "Emploi(s) crée(s) avec succès ");
        } catch (\Throwable $th) {
            //throw $th;
            return \redirect()->back()->with('failure', $th->getMessage());
        }
        


    }
}
