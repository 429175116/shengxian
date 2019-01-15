<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    //
    protected $table = 'article_categories';

    protected $fillable = [
        'name'
    ];
}
