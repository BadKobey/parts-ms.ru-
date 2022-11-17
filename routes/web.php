<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Main'], function (){
    Route::get('/','IndexController')->name('maim.index');
});

Route::group(['namespace' => 'Blog'], function (){
    Route::get('/blog','IndexController');
});

Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function (){
    Route::group(['namespace' => 'Main'], function (){
        Route::get('/','IndexController');
    });

    Route::group(['namespace' => 'Category',  'prefix'=> 'categories'], function (){
        Route::get('/','IndexController')->name('admin.category.index');
        Route::get('/create','CreateController')->name('admin.category.create');
        Route::post('/','StoreController')->name('admin.category.store');
        Route::get('/{category}','ShowController')->name('admin.category.show');
        Route::get('/{category}/edit','EditController')->name('admin.category.edit');
        Route::patch('/{category}','UpdateController')->name('admin.category.update');
        Route::delete('/{category}','DeleteController')->name('admin.category.delete');
    });
    Route::group(['namespace' => 'Tag',  'prefix'=> 'tags'], function (){
        Route::get('/','IndexController')->name('admin.tag.index');
        Route::get('/create','CreateController')->name('admin.tag.create');
        Route::post('/','StoreController')->name('admin.tag.store');
        Route::get('/{tag}','ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit','EditController')->name('admin.tag.edit');
        Route::patch('/{tag}','UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}','DeleteController')->name('admin.tag.delete');
    });
    Route::group(['namespace' => 'Pcategory',  'prefix'=> 'pcategories'], function (){
        Route::get('/','IndexController')->name('admin.pcategory.index');
        Route::get('/create','CreateController')->name('admin.pcategory.create');
        Route::post('/','StoreController')->name('admin.pcategory.store');
        Route::get('/{pcategory}','ShowController')->name('admin.pcategory.show');
        Route::get('/{pcategory}/edit','EditController')->name('admin.pcategory.edit');
        Route::patch('/{pcategory}','UpdateController')->name('admin.pcategory.update');
        Route::delete('/{pcategory}','DeleteController')->name('admin.pcategory.delete');
    });
    Route::group(['namespace' => 'Ptag',  'prefix'=> 'ptag'], function (){
        Route::get('/','IndexController')->name('admin.ptag.index');
        Route::get('/create','CreateController')->name('admin.ptag.create');
        Route::post('/','StoreController')->name('admin.ptag.store');
        Route::get('/{ptag}','ShowController')->name('admin.ptag.show');
        Route::get('/{ptag}/edit','EditController')->name('admin.ptag.edit');
        Route::patch('/{ptag}','UpdateController')->name('admin.ptag.update');
        Route::delete('/{ptag}','DeleteController')->name('admin.ptag.delete');
    });
    Route::group(['namespace' => 'Post',  'prefix'=> 'post'], function (){
        Route::get('/','IndexController')->name('admin.post.index');
        Route::get('/create','CreateController')->name('admin.post.create');
        Route::post('/','StoreController')->name('admin.post.store');
        Route::get('/{post}','ShowController')->name('admin.post.show');
        Route::get('/{post}/edit','EditController')->name('admin.post.edit');
        Route::patch('/{post}','UpdateController')->name('admin.post.update');
        Route::delete('/{post}','DeleteController')->name('admin.post.delete');
    });
    Route::group(['namespace' => 'Product',  'prefix'=> 'product'], function (){

        Route::get('/','IndexController')->name('admin.product.index');
        Route::get('/create','CreateController')->name('admin.product.create');
        Route::post('/','StoreController')->name('admin.product.store');
        Route::get('/{product}','ShowController')->name('admin.product.show');
        Route::get('/{product}/edit','EditController')->name('admin.product.edit');
        Route::patch('/{product}','UpdateController')->name('admin.product.update');
        Route::delete('/{product}','DeleteController')->name('admin.product.delete');
    });
});

Auth::routes();
