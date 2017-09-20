<?php

use Illuminate\Http\Request ;
use App\Book ;

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

// 1. index + add form
Route::get('/', 'BooksController@index');

// 2. store data sent by add form
Route::post('/book', 'BooksController@store');

// 3. edit form
Route::post('/bookedit/{book}', 'BooksController@edit');

// 4. update data sent by edit form
Route::post('/book/update', 'BooksController@update');

// 5. delete form
Route::delete('/book/{book}', 'BooksController@delete');
