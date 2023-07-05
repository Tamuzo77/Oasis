<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Partenaire extends Component
{
    public $partenaires ;

    public function mount()
    {
        $this->partenaires = \App\Models\Partenaire::all();
    }
    public function render()
    {
        return view('livewire.user.partenaire');
    }
}
