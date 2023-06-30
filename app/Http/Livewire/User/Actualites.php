<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Actualite;

class Actualites extends Component
{
    public  $actus ;
    
    public function mount()
    {
        $this->actus = Actualite::where('status_id', 1)->latest()->get();
    }
    public function render()
    {
        return view('livewire.user.actualites');
    }
}
