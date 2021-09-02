<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    //
       public $table = 'about_contents';
    protected $fillable = [
        'about_pic','about_heading','about_dis','point1','point2','point3','point4','point5','point6','whypicture','why_heading','why_description','contact_pic','contact_dis1','contact_dis2',
    ];
}
