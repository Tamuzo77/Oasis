<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Formation;

class FormationSlider extends Component
{
    public $formations ;

    public function mount()
    {
       $this->formations = Formation::latest()->take(9)->get();
    }
    public function render()
    {
        return view('livewire.user.formation-slider');
    }
}
