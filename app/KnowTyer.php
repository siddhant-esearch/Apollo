<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowTyer extends Model
{
    //
    public $table = 'know_tyers';
    protected $fillable = [
        'heading','description','picture','details_status','detail_id',
    ];
}
