<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Emploi;
use App\Models\Structure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\AdminService;
use App\Services\EmploiService;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

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


    public function index()
    {
        $admins = User::where('is_admin', true)->get();
        $users = User::where('is_admin', false)->get();
        $roles = Role::all();
        $permissions = Permission::all();
        return \view('admin.administrators.index', compact('admins', 'users', 'roles', 'permissions'));
    }

    public function store(Request $request)
    {
            (new AdminService())->createAdmin($request);
            return \redirect()->back()->with('success', "Administrateur(s) crée(s) avec succès");
    }
    public function removeRole($userId, Request $request)
    {
        if($request->roles)
        {
            (new AdminService())->removeRole($userId, $request->roles);

        }
        if($request->permissions)
        {
            (new AdminService())->revokePermission($userId, $request->permissions);

        }

        return redirect()->back()->with('success','Successfully removed');

    }

    public function addRoles($userId, Request $request)
    {
        if($request->roles)
        {
            (new AdminService())->addRoles($userId, $request->roles);

        }
        if($request->permissions)
        {
            (new AdminService())->addPermissions($userId, $request->permissions);

        }
        return \redirect()->back()->with('success','Successfully added');
    }
}
