<?php

namespace App\Http\Livewire\User;

use App\Models\Page;
use Livewire\Component;
use App\Models\ImageModel;

class ReseauRac extends Component
{
    public $imagesRac;

    public function mount()
    {
       $this->imagesRac = Page::all();
    }
    public function render()
    {
        return view('livewire.user.reseau-rac');
    }
}
