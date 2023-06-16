<?php

namespace App\Http\Livewire\Admin\Partenaires;

use Livewire\Component;
use App\Models\Partenaire;

class Index extends Component
{
    public $title = 'Les Partenaires';
    public function render()
    {
        $partenaires = Partenaire::latest()->paginate(8);
        return view('livewire.admin.partenaires.index', compact('partenaires'));
    }
}
