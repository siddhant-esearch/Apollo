<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    // 
    public $table = 'customer_enquiries';
    protected $fillable = [
        'customer_name','customer_email','subject','message',
    ];
}
