<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Caonima;

class CaonimaController extends Controller
{
    //
    public function index() {
        $caonima = Caonima::query()->first();
        $data['data'] = [
            'caonima' => $caonima
        ];
        return $this->apiSuccess($data);
    }
}
