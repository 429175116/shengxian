<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Model\News;
use App\Model\NewsImg;

class NewsTransformer extends TransformerAbstract{

    public function transform(News $item){
        return [
            'id' => $item->id,
            'title' => $item->title,
            'author' => $item->author,
            'content' => $item->content,
            'imgs' => $item->imgs()->get(),
        ];
    }
}