<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    //
    protected $table = 'posters';

    protected $fillable = [
        'img'
    ];
}
