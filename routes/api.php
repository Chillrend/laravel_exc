<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test_col', 'ApiController@test');
Route::get('/uts_siswa/date_test', 'ApiController@dateMutatorTest');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
