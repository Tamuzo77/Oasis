<?php 

namespace App\Actions;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Encryption\DecryptException;

class DecryptAndFind {

    public function handle($model, $value, $field ="slug")
    {
        try {
            $decrypted = Crypt::decrypt($value);
        } catch (DecryptException $e) {
            return \response($e->getMessage());
        };

        return $model::where($field, $decrypted)->get()->first();
    }
}