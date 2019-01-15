<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Model\RollingImg;
use App\Transformers\RollingImgTransformer;

use App\Http\Controllers\Controller;

class RollingImgController extends Controller
{
    public function index() {
        $rolling_imgs =  RollingImg::orderby('id', 'desc')->limit(3)->get();
        $data['data'] = [
            'rolling_imgs' => $this->fractalItems($rolling_imgs, new RollingImgTransformer())
        ];
        return $this->apiSuccess($data);
    }
}
