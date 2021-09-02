<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductForm extends Model
{
    //
     public $table = 'product_form_data';
    protected $fillable = [
        'name','email','mobile','city',
    ];
}
