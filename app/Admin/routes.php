<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->resource('/rollingimg', RollingImgController::class);
    $router->resource('/users', UserController::class);
    $router->resource('/contactus', ContactUsController::class);


    $router->resource('/articles', ArticleController::class);
    $router->resource('/articlecategory', ArticleCategoryController::class);

    $router->resource('/imgs', ImgController::class);
    $router->resource('/news', NewsController::class);
    $router->resource('/poster', PosterController::class);
    $router->resource('/caonima', CaonimaController::class);



    $router->get('/articleCategoryDetail', 'ArticleCategoryController@articleCategoryDetail');
});
