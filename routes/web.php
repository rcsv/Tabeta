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

Route::get('/', function () {
    //
	// top page
	// --------------------------------------------------------------------
	return view('books');

});

Route::post('/book', function (Request $request){

	//
	// just a stab.
	// --------------------------------------------------------------------

});

Route::delete('/book/{id}', function() {

	//
	// DELETE method
	// --------------------------------------------------------------------
});
