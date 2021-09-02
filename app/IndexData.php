<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexData extends Model
{
    //
      public $table = 'index_datas';
    protected $fillable = [
       'pic1','pic2','heading_after_slide','description_after_slide','we_have_description','we_have_pic1','we_have_heading1','we_have_description1','we_have_pic2','we_have_heading2','we_have_description2','after_we_have_pic','after_we_have_heading','after_we_have_description','inspection_dis','diagnostic_dis','upgrades_dis',
    ];
}
