<?php

namespace App\Http\Livewire\Admin\Services;

use Livewire\Component;

class Index extends Component
{
    public $services = 1;
    public $title = 'Les Services OASIS';
    public function render()
    {
        return view('livewire.admin.services.index');
    }
}
