<?php

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

Route::get('/', function(){
    return redirect()->route('books.index');
});

Route::group(['prefix' => 'api'], function(){
    Route::get('get-books','BooksController@getBooks');
});

//books
Route::group(['prefix' => 'books'], function(){
    Route::get('/', 'BooksController@index')->name('books.index');
    Route::get('create', 'BooksController@create')->name('books.create');
    Route::post('store', 'BooksController@store')->name('books.store');
    Route::get('{book}/edit', 'BooksController@edit')->name('books.edit');
    Route::post('update', 'BooksController@update')->name('books.update');
    Route::get('{book}/show', 'BooksController@show')->name('books.show');
    Route::post('{book}/destroy', 'BooksController@destroy')->name('books.destroy');
    Route::post('borrow', 'BooksController@borrow')->name('books.borrow');
});


//categories
Route::group(['prefix' => 'categories'], function(){
    Route::get('/', 'CategoriesController@index')->name('categories.index');
    Route::get('create', 'CategoriesController@create')->name('categories.create');
    Route::post('store', 'CategoriesController@store')->name('categories.store');
    Route::get('{category}/show', 'CategoriesController@show')->name('categories.show');
    Route::get('{category}/edit', 'CategoriesController@edit')->name('categories.edit');
    Route::post('update', 'CategoriesController@update')->name('categories.update');
    Route::post('{category}/destroy', 'CategoriesController@destroy')->name('categories.destroy');
});
