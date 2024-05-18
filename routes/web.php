<?php


Route::get('/', function () {
    return view('welcome');

})->name('home');
//  Definindo apelido base para um grupo de rotas
//  Route::get('/{store}/edit', 'StoreController@edit'); 
//  parametro dinamico - é um objeto

Route::group(['middleware' => ['auth']], function (){
    Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {
  
        Route::resource('stores', 'StoreController');
        Route::resource('products', 'ProductController');
     
    });
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
