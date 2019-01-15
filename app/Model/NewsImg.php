<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewsImg extends Model
{
    //
    protected $table = 'news_imgs';

    protected $fillable = [
        'news_id', 'img'
    ];
}
