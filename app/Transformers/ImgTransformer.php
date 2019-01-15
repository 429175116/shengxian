<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Model\Img;

class ImgTransformer extends TransformerAbstract{

    public function transform(Img $item){
        return [
            'id' => $item->id,
            'img' => $item->img,
        ];
    }
}