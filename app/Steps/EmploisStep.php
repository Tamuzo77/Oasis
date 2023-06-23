<?php

namespace App\Steps;

use App\Models\Emploi;
use App\Models\Adresse;
use Illuminate\Validation\Rule;
use Vildanbina\LivewireWizard\Components\Step;
use Cviebrock\EloquentSluggable\Services\SlugService;


class EmploisStep extends Step
{
    // Step view located at resources/views/steps/general.blade.php 
    protected string $view = 'steps.emplois';
    public $key=3;

    /*
     * Initialize step fields
     */
    public function mount()
    {
        $this->mergeState([
            'slug' ,
            'libelle' ,
            'description',
        ]);
    }

    
    
    /*
    * Step icon 
    */
    public function icon(): string
    {
        return 'bi bi-briefcase';
    }


    /*
     * When Wizard Form has submitted
     */
    public function save($state)
    {
        $user = $this->model;

        $user->name     = $state['name'];
        $user->email    = $state['email'];
        $user->firstname    = $state['firstname'];
        $user->tel    = $state['tel'];
        $user->age    = $state['age'];
        $user->cv_path    = $state['cv_path'];
        $user->picture    = $state['picture'];
        $user->role_id    = 1;

        /*$adresse = new Adresse();
        $adresse->rue = $state['rue'];
        $adresse->ville = $state['ville'];
        $adresse->code_postal = $state['code_postal'];
        $adresse->pays = $state['pays'];
        $adresse->save();
        $user->adresse_id = $adresse->id;*/
        $user->save();

        $emploi = new Emploi();
        $emploi->slug = $state['slug'];
        $emploi->libelle = $state['libelle'];
        $emploi->description = $state['description'];
        $emploi->user_id = $user->id;
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
                'state.libelle'     => ['required', 'string', 'min:3', 'max:255' ],
                'state.description'    => ['required', 'string', 'min:10'],
            ],
            [],
            [
                'state.libelle'     => __('Libelle'),
                'state.description'    => __('Description'),
            ],
        ];
    }

    /*
     * Step Title
     */
    public function title(): string
    {
        return __('Emplois');
    }
}