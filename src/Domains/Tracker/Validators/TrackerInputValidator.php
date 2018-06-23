<?php
namespace App\Domains\Tracker\Validators;
use App\Foundation\AppValidator;

class TrackerInputValidator extends AppValidator {
    protected $rules = [
        'tracking_code'  =>  'required',    
    ];

    protected $messages = [
        'required' => 'Please fill out the :attribute field.'
    ];
    
}