<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public $table = 'products';
    protected $fillable = [
        'product_number','product_name','product_dis','product_rate','details_status','details_id','product_image','product_type',
    ];
}
