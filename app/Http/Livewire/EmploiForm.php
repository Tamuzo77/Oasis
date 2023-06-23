<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Ville;
use App\Models\Commune;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithFileUploads;
use App\Models\Arrondissement;

class EmploiForm extends Component
{
    use WithFileUploads;

    public User $user;
    public $candidat;
    public $increment = 1;
    public $emplois = [];
    public $dept, $com, $arr;
    public $departments = [];
    public $communes = [];
    public $arrondissements = [];
    public $villes = [];
    
    protected $rules = [
        'user.name' => 'required|min:3|max:255|string',
        'user.firstname' => 'required|min:3|max:255|string',
        'user.email' => 'required|email|max:255',
        'user.tel' => 'required|phone:BJ',
        'user.age' => 'required | min:16 | max:99|numeric',
        'user.picture' => 'required|image',
        'user.cv_path' => '',
        'dept' => '',
        'com' => '',
        'arr' => '',
    ];
    

    public function mount(User $user)
    {
        $this->user = User::findOrNew($user->id);
        $this->candidat = false;
        $this->departments = Department::latest()->get();
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

    public function updatedUserName()
    {
        $this->validateOnly('user.name');
    }

    public function updatedUserFirstname()
    {
        $this->validateOnly('user.firstname');
    }

    public function updatedUserEmail()
    {
        $this->validateOnly('user.email');
    }

    public function updatedUserTel()
    {
        $this->validateOnly('user.tel');
    }

    public function updatedUserAge()
    {
        $this->validateOnly('user.age');
    }

    public function updatedUserPicture()
    {
        $this->validateOnly('user.picture');
    }

    
    public function updatedDept($value)
    {
        $this->communes = Commune::where('department_id', $value)->get();
    }

    public function updatedCom($value)
    {
        $this->arrondissements = Arrondissement::where('commune_id', $value)->get();
    }

    public function updatedArr($value)
    {
        $this->villes = Ville::where('arrondissement_id', $value)->get();
    }
    public function render()
    {
        return view('livewire.emploi-form');
    }
}
