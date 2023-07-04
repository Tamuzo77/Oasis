<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Formation;
use Illuminate\Contracts\Database\Query\Builder;

class Formations extends Component
{
    public $prix;
    public $type = 'Certifiantes';
    public $formations;

    public function mount($prix = 1)
    {
        $this->formations = Formation::where('price', '>', 0)->latest()->get();

        $this->prix = $prix;
        if($this->prix == null)
        {
            $this->type = 'Gratuites';
            $this->formations = Formation::whereHas('status', function(Builder $query){
                $query->where('id', 1);
            })->where('price', null)->orWhere('price', '0')->latest()->get();

        }
    }
    public function render()
    {
        return view('livewire.user.formations');
    }
}
