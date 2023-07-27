<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Structure;
use Livewire\WithFileUploads;

class EspaceEmploi extends Component
{
    use WithFileUploads;

    public Structure $structure;
    public $candidat;   

    protected $rules = [
        'structure.name' => 'required|min:3|max:255|string',
        'structure.email' => 'required|email|max:255',
        'structure.tel' => 'required|phone:BJ',
        'structure.ifu' => 'required | digits:13 | regex:/^[0-9]{13}$/ |numeric',
        'structure.logo' => 'required|image',
        'structure.lien_facebook' => 'url',
        'structure.lien_github' => 'url',
        'structure.lien_linkedin' => 'url',
       
    ];
    protected $messages = [
        'structure.ifu' => 'Entrer un numéro IFU valide',
    ];
    public function mount()
    {
        $this->structure = new Structure();
    }
    public function render()
    {
        return view('livewire.user.espace-emploi');
    }

    public function updatedStructureName()
    {
        $this->validateOnly('structure.name');
    }


    public function updatedStructureEmail()
    {
        $this->validateOnly('structure.email');
    }

    public function updatedStructureTel()
    {
        $this->validateOnly('structure.tel');
    }

    public function updatedStructureIfu()
    {
        $this->validateOnly('structure.ifu');
    }

    public function updatedStructureLogo()
    {
        $this->validateOnly('structure.logo');
    }
}
