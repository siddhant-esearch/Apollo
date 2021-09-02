<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
     public $table = 'contact_us';
    protected $fillable = [
        'logo1','logo2','favicon','mobile','email','address','facebook_url','instagram_url','youtube_url','twitter_url','linkedin_url','free_shipping','cash_on_delivery','special_gift','customer_service','after_email','after_mobile','contact_banner','contact_dis','contact_pic','map_url',
    ];
}
