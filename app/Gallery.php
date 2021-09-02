<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    public $table = 'gallery_pics';
    protected $fillable = [
        'image',
    ];
}
