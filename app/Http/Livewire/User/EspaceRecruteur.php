<?php

namespace App\Http\Livewire\User;

use App\Models\Emploi;
use Livewire\Component;

class EspaceRecruteur extends Component
{
    public $emplois ;

    public function mount()
    {
        $this->emplois = Emploi::where('visible', true)->latest()->get();
    }
    public function render()
    {
        return view('livewire.user.espace-recruteur');
    }
}
