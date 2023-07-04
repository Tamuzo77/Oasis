<?php

namespace App\Http\Livewire\User;

use App\Models\Page;
use Livewire\Component;
use App\Models\ImageModel;

class ReseauRac extends Component
{
    public $imagesRac;

    public function mount($images)
    {
       $this->imagesRac = $images;
    }
    public function render()
    {
        return view('livewire.user.reseau-rac');
    }
}
