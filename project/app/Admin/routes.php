<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('brands', BrandController::class);
    $router->resource('districts', DistrictController::class);
    $router->resource('products', ProductController::class);
    $router->resource('product-categories', ProductCategoryController::class);
    $router->resource('product-images', ProductImageController::class);
    $router->resource('provinces', ProvinceController::class);
    $router->resource('orders', OrderController::class);
    $router->resource('order-details', OrderDetailController::class);
    $router->resource('sliders', SliderController::class);
    $router->resource('users', UserController::class);
    $router->resource('wards', WardController::class);
});
