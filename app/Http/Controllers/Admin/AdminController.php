<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function dashboard()
    {
        return \view('admin/dashboard');
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
        return \view('admin.espace_emploi.emplois');
    }

    public function emplois_create()
    {
        return \view('admin.espace_emploi.create');
    }
}
