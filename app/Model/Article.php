<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';

    protected $fillable = [
        'title', 'author', 'content', 'cate_id'
    ];

    public function imgs() {
        return $this->hasMany('\App\Model\ArticleImg', 'artile_id', 'id');
    }

    public function category() {
        return $this->belongsTo('App\Model\ArticleCategory', 'cate_id', 'id');
    }
}
