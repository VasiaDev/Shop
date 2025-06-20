<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', IndexController::class)->name('main.index');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
        Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('category.create');
        Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('category.store');
        Route::get('{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('category.edit');
        Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('category.show');
        Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('category.update');
        Route::delete('/{category}', \App\Http\Controllers\Category\DeleteController::class)->name('category.delete');
    });

    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', \App\Http\Controllers\Tag\IndexController::class)->name('tag.index');
        Route::get('/create', \App\Http\Controllers\Tag\CreateController::class)->name('tag.create');
        Route::post('/', \App\Http\Controllers\Tag\StoreController::class)->name('tag.store');
        Route::get('{tag}/edit', \App\Http\Controllers\Tag\EditController::class)->name('tag.edit');
        Route::get('/{tag}', \App\Http\Controllers\Tag\ShowController::class)->name('tag.show');
        Route::patch('/{tag}', \App\Http\Controllers\Tag\UpdateController::class)->name('tag.update');
        Route::delete('/{tag}', \App\Http\Controllers\Tag\DeleteController::class)->name('tag.delete');
    });

    Route::group(['prefix' => 'colors'], function () {
        Route::get('/', \App\Http\Controllers\Color\IndexController::class)->name('color.index');
        Route::get('/create', \App\Http\Controllers\Color\CreateController::class)->name('color.create');
        Route::post('/', \App\Http\Controllers\Color\StoreController::class)->name('color.store');
        Route::get('{color}/edit', \App\Http\Controllers\Color\EditController::class)->name('color.edit');
        Route::get('/{color}', \App\Http\Controllers\Color\ShowController::class)->name('color.show');
        Route::patch('/{color}', \App\Http\Controllers\Color\UpdateController::class)->name('color.update');
        Route::delete('/{color}', \App\Http\Controllers\Color\DeleteController::class)->name('color.delete');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', \App\Http\Controllers\User\IndexController::class)->name('user.index');
        Route::get('/create', \App\Http\Controllers\User\CreateController::class)->name('user.create');
        Route::post('/', \App\Http\Controllers\User\StoreController::class)->name('user.store');
        Route::get('{user}/edit', \App\Http\Controllers\User\EditController::class)->name('user.edit');
        Route::get('/{user}', \App\Http\Controllers\User\ShowController::class)->name('user.show');
        Route::patch('/{user}', \App\Http\Controllers\User\UpdateController::class)->name('user.update');
        Route::delete('/{user}', \App\Http\Controllers\User\DeleteController::class)->name('user.delete');
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', \App\Http\Controllers\Product\IndexController::class)->name('product.index');
        Route::get('/create', \App\Http\Controllers\Product\CreateController::class)->name('product.create');
        Route::post('/', \App\Http\Controllers\Product\StoreController::class)->name('product.store');
        Route::get('{product}/edit', \App\Http\Controllers\Product\EditController::class)->name('product.edit');
        Route::get('/{product}', \App\Http\Controllers\Product\ShowController::class)->name('product.show');
        Route::patch('/{product}', \App\Http\Controllers\Product\UpdateController::class)->name('product.update');
        Route::delete('/{product}', \App\Http\Controllers\Product\DeleteController::class)->name('product.delete');
    });

    Route::group(['prefix' => 'groups'], function () {
        Route::get('/', \App\Http\Controllers\Group\IndexController::class)->name('group.index');
        Route::get('/create', \App\Http\Controllers\Group\CreateController::class)->name('group.create');
        Route::post('/', \App\Http\Controllers\Group\StoreController::class)->name('group.store');
        Route::get('{group}/edit', \App\Http\Controllers\Group\EditController::class)->name('group.edit');
        Route::get('/{group}', \App\Http\Controllers\Group\ShowController::class)->name('group.show');
        Route::patch('/{group}', \App\Http\Controllers\Group\UpdateController::class)->name('group.update');
        Route::delete('/{group}', \App\Http\Controllers\Group\DeleteController::class)->name('group.delete');
    });

    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', \App\Http\Controllers\Order\IndexController::class)->name('order.index');
    });

});

Route::get('{page}', \App\Http\Controllers\Client\IndexController::class)->where('page', '.*');
