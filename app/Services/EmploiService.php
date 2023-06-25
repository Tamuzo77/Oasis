<?php

namespace App\Services;

use App\Models\Emploi;
use App\Models\Structure;
use Illuminate\Support\Facades\DB;

class EmploiService {

    public function store($emploiDatas)
    {
        try {
            DB::transaction(function () use ($emploiDatas) {
                $structure = Structure::updateOrCreate([
                        'email' => $emploiDatas->structure_email,
                    ], [    
                            'name' => $emploiDatas->structure_name,
                            'tel' => $emploiDatas->structure_tel, 
                            'ifu' => $emploiDatas->structure_ifu ,  
                            'lien_facebook'=>$emploiDatas->structure_lien_facebook , 
                            'lien_github'=>$emploiDatas->structure_lien_github , 
                            'lien_linkedin'=>$emploiDatas->structure_lien_linkedin, 
                            'logo' => $emploiDatas->structure_logo->store('espace_emploi/structure', 'public') , 
                         ]
                );
    
                foreach($emploiDatas->emplois as $emploi)
                {
                    $emploi['structure_id'] = $structure->id;
                    $emploi['author'] = auth()->user()->email ?? null;
                    $emploi['slug'] = \Str::slug( $structure->name.' '.$emploi['libelle']);
                     Emploi::create($emploi);
                }
    
            });
            } catch (\Throwable $th) {
                //throw $th;
                return \redirect()->back()->with('failure', $th->getMessage());
            }
    }
}