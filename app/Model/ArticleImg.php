<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArticleImg extends Model
{
    //
    protected $table = 'article_imgs';

    protected $fillable = [
        'artile_id', 'img'
    ];
}
