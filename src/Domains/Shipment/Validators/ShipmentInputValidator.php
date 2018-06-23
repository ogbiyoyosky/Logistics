<?php
namespace App\Domains\Shipment\Validators;
use App\Foundation\AppValidator;

class ShipmentInputValidator extends AppValidator {
    protected $rules = [
        'shipment_title' =>'required',
        'tracking_code'  =>  'required',
        'filename' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    protected $messages = [
        'required' => 'Please fill out the :attribute field.',
        'image' => 'Choose an lower than 2mb'
    ]; 
    
}