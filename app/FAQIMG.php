<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQIMG extends Model
{
    //

     public $table = 'faq_images';
    protected $fillable = [
       'pic1','pic2','pic3','c_pic1','c_pic2','c_pic3',
    ];
}
