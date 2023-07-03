<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Formation;
use Illuminate\Contracts\Database\Query\Builder;

class FormationSlider extends Component
{
    public $formations ;

    public function mount()
    {
       $this->formations = Formation::whereHas('categoryForm', function(Builder $query){
        $query->where('archived', 0);
       })->where('status_id', 1)->latest()->take(9)->get();
    }
    public function render()
    {
        return view('livewire.user.formation-slider');
    }
}
