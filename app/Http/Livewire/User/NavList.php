<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class NavList extends Component
{
    public $pages = [];

    public function mount()
    {
        $this->pages = [
            '0' => [
                'title' => 'Titre',
                'href' => '',
                'toggled' =>true,
                'pages' =>[ 
                    ['id' => 2,'title' => 'SousTitre','href' => '/',],
                    ['id' => 2,'title' => 'Gru2','href' => '/',]
            ],
            ],
            '1' => [
                'title' => 'Suii',
                'href' => 'admin/dashboard',
                'toggled' =>false,
                'pages' => null
            ],
        ];
    }
    public function render()
    {
        return view('livewire.user.nav-list');
    }
}
