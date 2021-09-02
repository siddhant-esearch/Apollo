<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    //
    public $table = 'product_details';
    protected $fillable = [
        'product_page_banner','discount_rate','save_percentage','short_details','description','product_details','reviews','banner_tags','tag1','tag2','tag3','width','aspect_ratio','rim_diameter','tube_type',
    ];
}
