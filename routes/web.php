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
use Carbon\Carbon;
use function foo\func;


Route::get('/', function () {

    return view("homepage");

});

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/add', function (){
    return view("page.create");
});
Route::get('/siswa/{id}', 'SiswaController@show');

Route::post('/siswa', 'SiswaController@store');

Route::get('/siswa/edit/{id}', 'SiswaController@edit_views');
Route::post('/siswa/edit/do/{id}', 'SiswaController@doEdit');
Route::get('/siswa/delete/{id}', 'SiswaController@delete');

