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

use App\Http\Controllers\SiswaController;
use function foo\func;

\
Route::get('/', function () {

    return view("homepage");

});

Route::get('/homepage', 'PageController@homepage');

Route::get('/about', 'PageController@about');

Route::get('/contact', function (){
    return view("contact");
});

Route::get('/testing', function (){
    return view("testing");
});

Route::get('siswa/create', 'SiswaController@create');

Route::get('/galeri', function (){
    return view("galeri");
});

Route::get('/laravel', function (){
    return view("welcome");
});

Route::get('/halaman', function (){
    return view("apa_ini");
});

Route::get('/halaman_9', function (){
   return view("page/halaman_9") ;
});


Route::get('/halaman_10', function (){
    return view("page/halaman_10") ;
});

Route::get('/homepage_mantab', function(){
   return view('page/homepage');
});

Route::get('/siswa', 'SiswaController@siswa');
