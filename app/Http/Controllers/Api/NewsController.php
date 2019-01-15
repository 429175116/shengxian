<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Model\News;
use App\Transformers\NewsTransformer;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function index() {
        $news = News::orderby('id', 'desc')->paginate(10);
        $data = [
            'news_list' => $this->factalPaginator($news, new NewsTransformer())
        ];
        return $this->apiSuccess($data);
    }

    public function detail($id) {
        $news = News::findorfail($id);
        $data = [
            'news' => $this->fractalItem($news, new NewsTransformer())
        ];
        return $this->apiSuccess($data);
    }
}
