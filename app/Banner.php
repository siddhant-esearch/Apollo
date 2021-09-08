<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
      public $table = 'banners';
    protected $fillable = [
        'gallery_banner','about_banner','about_form_img','service_banner','service_from_pic','service_dis','service_banner_dis','service_details_banner','know_banner','know_details',
    ];

}
