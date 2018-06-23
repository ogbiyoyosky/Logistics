<?php
namespace App\Domains\Image\Validators;
use App\Foundation\AppValidator;

class UploadInputValidator extends AppValidator {
    protected $rules = [
        'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    protected $messages = [
        'required' => 'Please fill out the :attribute field.'
    ];
    
}