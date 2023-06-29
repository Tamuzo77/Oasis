<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Ville;
use App\Models\Commune;
use Livewire\Component;
use App\Models\Structure;
use App\Models\Department;
use Livewire\WithFileUploads;
use App\Models\Arrondissement;

class EmploiForm extends Component
{
    use WithFileUploads;

    public Structure $structure;
    public $candidat;
    public $increment = 1;
    public $emplois = [];
    public $villes = [];
    
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
        'user.ifu' => 'Entrer un numéro IFU valide',
    ];

    public function mount(Structure $structure)
    {
        $this->structure = Structure::findOrNew($structure->id);
        $this->candidat = false;
        $this->villes = Ville::latest()->get();
        $this->emplois = [['libelle'=>'', 'description'=>'', 'ville'=>'' ]];
    }

    public function addEmploi()
    {
        $this->emplois[] = ['libelle'=>'', 'description'=>'', 'ville'=>'' ];
    }

    public function removeEmploi($index)
    {
        
            unset($this->emplois[$index]);
            $this->emplois = array_values($this->emplois);
        
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

    
    public function render()
    {
        return view('livewire.emploi-form');
    }
}
