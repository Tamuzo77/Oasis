<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Customer;

class CvTheque extends Component
{
    public $cvs;

    public function mount()
    {
        $this->cvs = Customer::where('visible', true)->orderBy('lastname', 'ASC')->get();
    }
    public function render()
    {
        return view('livewire.user.cv-theque');
    }
}
