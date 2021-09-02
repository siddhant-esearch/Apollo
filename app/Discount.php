<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //
     public $table = 'discounts';
    protected $fillable = [
        'image','discount_for','discount',
    ];
}
