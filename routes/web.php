<?php


Route::get('/', function () {
    return view('welcome');

    
});

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {
  
    // Route::prefix('/stores')->name('stores.')->group(function () {

    //     Route::get('/', 'StoreController@index')->name('index');
    //     Route::get('/create', 'StoreController@create')->name('create');
    //     Route::post('/store', 'StoreController@store')->name('store');
    //     Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
    //     Route::post('/update/{store}', 'StoreController@update')->name('update');
    //     Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');

    // });
    Route::resource('stores', 'StoreController');
    Route::resource('products', 'ProductController');
});
//  Definindo apelido base para um grupo de rotas
//  Route::get('/{store}/edit', 'StoreController@edit'); 
//  parametro dinamico - é um objeto