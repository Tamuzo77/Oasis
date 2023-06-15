<?php

namespace App\View\Components\admin\services;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class index extends Component
{
    /**
     * Create a new component instance.
     */
    public $title ;
    public function __construct()
    {
        //
        $this->title = 1;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.services.index');
    }
}
