<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RollingImg extends Model
{
    //
    protected $table = 'rolling_imgs';

    protected $fillable = [
        'img', 'type'
    ];
}
