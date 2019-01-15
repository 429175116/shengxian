<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Model\Img;
use App\Model\Poster;
use App\Transformers\ImgTransformer;
use App\Http\Controllers\Controller;

class ImgController extends Controller
{
    //
    public function index() {
        $imgs = Img::get();
        $data = [
            'imgs' => $this->fractalItems($imgs, new ImgTransformer())
        ];
        return $this->apiSuccess($data);
    }

    public function poster() {
        $poster = Poster::findorfail(1);
        $data = [
            'poster' => $poster
        ];
        return $this->apiSuccess($data);
    }
}
