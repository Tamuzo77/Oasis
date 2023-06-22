<?php

namespace App\Services;

use App\Models\Actualite;
use App\Actions\DecryptAndFind;

class ActusService {
    public function create($actuDatas)
    {
        try {
            Actualite::create($actuDatas);

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('failure',$th->getMessage());
        }
    }

    public function update($slug , $actuDatas)
    {
        $actus = (new DecryptAndFind())->handle(Actualite::class, $slug);
        $actus->update($actuDatas);
    }

    public function delete($slug)
    {       
        $actus = (new DecryptAndFind())->handle(Actualite::class, $slug);
        $actus->delete();
    }
}