<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Service extends Component
{
    public $services ;

    public function mount()
    {
        $this->services = \App\Models\Service::where('status_id', 1)->get();
    }
    public function render()
    {
        return view('livewire.user.service');
    }
}
