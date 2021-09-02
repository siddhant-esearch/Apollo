<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    //
    public $table = 'service_details';
    protected $fillable = [
        'description1','description2','image1','image2','video','heading_after_video','description_after_video','left_image','left_heading','left_description','right_image','right_heading	','right_description',
    ];
}
