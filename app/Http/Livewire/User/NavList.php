<?php

namespace App\Http\Livewire\User;

use App\Models\Page;
use Livewire\Component;

class NavList extends Component
{
    public $pages = [];
    public $mages = [];

    public function mount()
    {
        $this->mages = [
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
        $this->pages = Page::with(['children'])->where('parent_id', null)->get();
    }
    public function render()
    {
        return view('livewire.user.nav-list');
    }
}
