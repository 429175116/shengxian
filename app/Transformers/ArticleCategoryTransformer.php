<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Model\ArticleCategory;

class ArticleCategoryTransformer extends TransformerAbstract{

    public function transform(ArticleCategory $item){
        return [
            'id' => $item->id,
            'name' => $item->name
        ];
    }
}