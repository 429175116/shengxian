<?php
namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Model\RollingImg;

class RollingImgTransformer extends TransformerAbstract{

    public function transform(RollingImg $item){
        return [
            'img' => $item->img,
//            'can_redemption' => $item->can_redemption,
//            'challege_time' => $item->challege_time
        ];
    }
}