<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Formation;
use Illuminate\Http\Request;
use App\Actions\DecryptAndFind;

class MainController extends Controller
{
    //

    public function home()
    {
        $page = Page::where('href', '/home')->get()->first();
        return \view("user.$page->view", compact('page'));
    }

    public function qsn()
    {
        return \view('user.qsn');
    }

    public function reseauRac()
    {
        return \view('user.reseauRac');
    }

    public function cvTheque()
    {
        return \view('user.cvTheque');
    }

    public function inscription()
    {
        return \view('user.inscription');
    }
    
    public function formationInscription($slug)
    {
        try {
            $formation = (new DecryptAndFind())->handle(Formation::class, $slug);
            auth()->user()->formations()->attach($formation);
            return \redirect()->back()->with('success', 'Votre inscription a été effectué avec succès');        
        } catch (\Throwable $th) {
            return \redirect()->back()->with('failure', $th->getMessage());
        }

    }
}
