<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';

    protected $fillable = [
        'title', 'author', 'content'
    ];

    public function imgs() {
        return $this->hasMany('\App\Model\NewsImg', 'news_id', 'id');
    }
}
