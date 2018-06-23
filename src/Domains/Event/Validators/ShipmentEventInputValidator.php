<?php
namespace App\Domains\Event\Validators;
use App\Foundation\AppValidator;

class ShipmentEventInputValidator extends AppValidator {
    protected $rules = [
        'shipment_id' =>'required',
        'event'  =>  'required',
    ];

    protected $messages = [
        'required' => 'Please fill out the :attribute field.'
    ];
    
}