<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('brands', BrandController::class);   //品牌
    $router->resource('categories', CateController::class);  //分类
    $router->resource('goods', GoodsController::class);   //商品
});



