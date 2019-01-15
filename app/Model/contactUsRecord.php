<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class contactUsRecord extends Model
{
    //
    protected $table = 'contact_us_records';

    protected $fillable = [
        'user_id', 'name', 'telphone', 'content'
    ];
}
