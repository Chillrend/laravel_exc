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
use App\Http\Controllers\UTSSiswaController;
use Carbon\Carbon;
use function foo\func;


Route::get('/', function () {

    return view("homepage");

});

Route::get('/uts_siswa', [UTSSiswaController::class, 'index']);
Route::get('/uts_siswa/add', function (){
    return view("utssiswa.add");
});
Route::post('/uts_siswa', [UTSSiswaController::class, 'store']);
Route::get('/uts_siswa/{id}', [UTSSiswaController::class, 'show']);
Route::get('/uts_siswa/edit/{id}', [UTSSiswaController::class, 'edit_views']);
Route::post('/uts_siswa/edit/do/{id}', [UTSSiswaController::class, 'do_edit']);
Route::get('/uts_siswa/delete/{id}', [UTSSiswaController::class, 'delete']);



Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/add', function (){
    return view("page.create");
});
Route::get('/siswa/{id}', 'SiswaController@show');

Route::post('/siswa', 'SiswaController@store');

Route::get('/siswa/edit/{id}', 'SiswaController@edit_views');
Route::post('/siswa/edit/do/{id}', 'SiswaController@doEdit');
Route::get('/siswa/delete/{id}', 'SiswaController@delete');

