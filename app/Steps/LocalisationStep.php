<?php

namespace App\Steps;

use App\Models\User;
use App\Models\Ville;
use App\Models\Emploi;
use App\Models\Adresse;
use App\Models\Commune;
use App\Models\Department;
use App\Models\Arrondissement;
use Illuminate\Validation\Rule;
use Vildanbina\LivewireWizard\Components\Step;

class LocalisationStep extends Step
{
    // Step view located at resources/views/steps/general.blade.php 
    protected string $view = 'steps.localisation';
    public $depts = [];
    public $communes= [];
    public $arr= [];
    public $villes= [];
    public $selectedDept ;
    public $selectedCom ;
    public $selectedArr ;
    /*
     * Initialize step fields
     */
    public function mount()
    {
        $this->mergeState([
                      
            'ville_id'          ,
        ]);

       
    }

    public function onStepIn()
    {
        $this->depts = Department::latest()->get()->with('emplois');

    }

    

    /*
    * Step icon 
    */
    public function icon(): string
    {
        return 'bi bi-geo-alt';
    }

    /*
     * When Wizard Form has submitted
     */
    public function save($state)
    {
        $user = User::firstOrNew(['email' => $state['email']]);

        $user->name     = $state['name'];
        $user->firstname    = $state['firstname'];
        $user->tel    = $state['tel'];
        $user->age    = $state['age'];
        $user->cv_path    = $state['cv_path'];
        $user->picture    = $state['picture'];
        $user->role_id    = 1;
        $user->save();

        $emploi = new Emploi();
        $emploi->slug = $state['slug'];
        $emploi->libelle = $state['libelle'];
        $emploi->description = $state['description'];
        $emploi->user_id = $user->id;
        $emploi->ville_id = $state['ville_id'];
        $emploi->save();
        return \redirect()->route('admin.emplois');
    }

    /*
     * Step Validation
     */
    public function validate()
    {
        return [
            [
                'state.rue'     => ['required', 'string'],
                'state.ville'    =>['required', 'string'],
                'state.code_postal' => ['required', 'string'],
                'state.pays' => ['required', 'string'],
            ],
            [],
            [
                'state.rue'     => __('Rue'),
                'state.ville'    => __('Ville'),
                'state.pays' => __('Pays'),
                'state.code_postal' => __('Code Postal'),
            ],
        ];
    }

    /*
     * Step Title
     */
    public function title(): string
    {
        return __('Localisation');
    }
}