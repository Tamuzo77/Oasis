<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Ville;
use App\Models\Emploi;
use App\Models\Commune;
use App\Models\Department;
use App\Steps\EmploisStep;
use Livewire\WithFileUploads;
use App\Models\Arrondissement;
use App\Steps\LocalisationStep;
use App\Steps\IdentificationStep;
use Vildanbina\LivewireWizard\WizardComponent;
use Cviebrock\EloquentSluggable\Services\SlugService;


class UserWizard extends WizardComponent
{
    use WithFileUploads;
    public $userId;
    public $depts = [];
    public $communes= [];
    public $arr= [];
    public $villes= [];
    public $selectedDept ;
    public $selectedCom ;
    public $selectedArr ;


    public array $steps = [
        IdentificationStep::class,
        EmploisStep::class,
        LocalisationStep::class,
       ];

    public function model()
    {
        return User::findOrNew($this->userId);
    }


    public function changedDepartment()
    {
        $this->communes = Commune::where('department_id', $this->selectedDept)->get();
    }

    public function changedCommune()
    {
        $this->arr = Arrondissement::where('commune_id', $this->selectedCom)->get();
    }

    public function changedArr()
    {
        $this->villes = Ville::where('arrondissement_id', $this->selectedArr)->get();
    }

        

}
