<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\ArticleCategory;
use App\Transformers\ArticleTransformer;
use App\Transformers\ArticleCategoryTransformer;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function categories() {
        $article_categories = ArticleCategory::get();
        $data = [
            'article_categories' => $this->fractalItems($article_categories, new ArticleCategoryTransformer())
        ];
        return $this->apiSuccess($data);
    }

    //
    public function index($category_id) {
       $articles = Article::where('cate_id', $category_id)->orderby('id', 'desc')->paginate(20);
       $data = [
           'articles' => $this->factalPaginator($articles, new ArticleTransformer())
       ];

       return $this->apiSuccess($data);
    }

    public function detail($id) {
        $article = Article::findorfail($id);
        $data = [
            'article' => $this->fractalItem($article, new ArticleTransformer())
        ];
        return $this->apiSuccess($data);
    }

}
