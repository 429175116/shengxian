<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Model\Article;
use App\Model\ArticleImg;

class ArticleTransformer extends TransformerAbstract{

    public function transform(Article $item){
        return [
            'id' => $item->id,
            'title' => $item->title,
            'author' => $item->author,
            'content' => $item->content,
            'imgs' => $item->imgs()->get(),
            'created_at' =>$item->created_at->toDateTimeString(),
            'updated_at' =>$item->updated_at->toDateTimeString(),
        ];
    }
}