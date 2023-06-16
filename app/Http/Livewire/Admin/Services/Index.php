<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class Index extends Component
{
    public $title = 'Les Services OASIS';
    public function render()
    {
        $services = Service::latest()->paginate(8);
        return view('livewire.admin.services.index', compact('services'));
    }
}
