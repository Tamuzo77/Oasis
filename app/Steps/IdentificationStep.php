<?php

namespace App\Steps;

use Vildanbina\LivewireWizard\Components\Step;
use Illuminate\Validation\Rule;


class IdentificationStep extends Step
{
    // Step view located at resources/views/steps/general.blade.php 
    protected string $view = 'steps.identification';
    public $key=2;

    /*
     * Initialize step fields
     */
    public function mount()
    {
        $this->mergeState([
            'name'                  => $this->model->name,
            'firstname'             => $this->model->firstname,
            'tel'                   => $this->model->tel,
            'age'                   => $this->model->age,
            'email'                 => $this->model->email,
            'cv_path'               => $this->model->cv_path,
            'picture'               => $this->model->picture,
            'role_id'               => $this->model->role_id
        ]);
    }
    
    /*
    * Step icon 
    */
    public function icon(): string
    {
        return 'bi bi-person-bounding-box';
    }

    /*
     * When Wizard Form has submitted
     */


    /*
     * Step Validation
     */
    public function validate()
    {
        return [
            [
                'state.email'    => ['required', 'email', 'max:255'],
                'state.name'     => ['required', 'string', 'max:255'],
                'state.firstname' => ['required', 'min:2', 'max:255', 'string'],
                'state.tel' => ['required', 'phone:BJ'],
                'state.age' => ['required', 'integer', 'max:99', 'min:16' ],
                'state.picture' => ['required', 'image', 'max:255' ],
                'state.cv_path' => ['file', 'max:255'],
            ],
            [],
            [
                'state.name'     => __('Name'),
                'state.email'    => __('Email'),
                'state.firstname' => __('First Name'),
                'state.tel' => __('Tel'),
                'state.age' => __('Age'),
                'state.picture' => __('Picture'),
                'state.cv_path' => __('CV')
            ],
        ];
    }

    /*
     * Step Title
     */
    public function title(): string
    {
        return __('Identification');
    }
}