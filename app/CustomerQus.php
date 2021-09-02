<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerQus extends Model
{
    //
     public $table = 'customer_questions';
    protected $fillable = [
       'question','answer',
    ];
}
