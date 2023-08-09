<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Emploi;
use App\Models\Customer;
use App\Models\Actualite;
use App\Models\Formation;
use App\Models\Structure;
use Illuminate\Http\Request;
use App\Events\EmploiCreated;
use App\Actions\DecryptAndFind;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreEmploiRequest;
use App\Http\Requests\StoreCustomerRequest;

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

    public function depotDeCv(StoreCustomerRequest $request)
    {
        Customer::create($request->validated());
        return redirect()->back()->with('success', 'Votre CV a été envoyé avec succès, il sera visible après notre confirmation. Merci pour votre compréhension');
    }

    public function emploiCreate(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $structure = Structure::updateOrCreate([
                        'email' => $request->structure_email,
                    ], [    
                            'name' => $request->structure_name,
                            'tel' => $request->structure_tel, 
                            'ifu' => $request->structure_ifu ,  
                            'lien_facebook'=>$request->structure_lien_facebook , 
                            'lien_github'=>$request->structure_lien_github , 
                            'lien_linkedin'=>$request->structure_lien_linkedin, 
                            'logo' => $request->structure_logo->store('espace_emploi/structure', 'public') , 
                         ]
                );
                    $emploi['structure_id'] = $structure->id;
                    $emploi['author'] = auth()->user()->email ?? null;
                    $emploi['slug'] = \Str::slug( $structure->name.' '.$emploi['libelle']);
                    $emploi['libelle'] = $request->libelle;
                    $emploi['description'] = $request->description;
                    $emploi['ville_id'] = $request->ville_id;
                     $emps = Emploi::create($emploi);
                     EmploiCreated::dispatch($emps);
                    return \redirect()->back()->with('success', "Emploi crée avec succes");

            });
            } catch (\Throwable $th) {
                return \redirect()->back()->with('failure', $th->getMessage());
            }
    }

    public function actu($actu)
    {
        $actu = Actualite::where('slug', $actu)->get()->first();
        $page = Page::first();
        return \view('user.actu', [
            'actu' => $actu,
            'page' => $page
        ]);
    }
}
