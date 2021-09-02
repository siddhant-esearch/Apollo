<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
     public $table = 'services';
    protected $fillable = [
        'service_name','service_discription','service_image','details_status','detail_id',
    ];
}