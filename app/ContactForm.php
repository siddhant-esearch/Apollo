<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    //
     public $table = 'contact_form_data';
    protected $fillable = [
        'name','email','mobile','message',
    ];
}
