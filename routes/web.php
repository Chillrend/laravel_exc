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

Route::get('/sampledata', function (){
   DB::table('siswa')->insert([
      [
          'nisn'    => '1234',
          'nama_siswa' => 'Galang Prasetyo',
          'tgl_lahir' => '1991-05-11',
          'jenis_kelamin' => 'L',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ],
       [
           'nisn'    => '1235',
           'nama_siswa' => 'Ardabelly',
           'tgl_lahir' => '1992-05-11',
           'jenis_kelamin' => 'P',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
       [
           'nisn'    => '1236',
           'nama_siswa' => 'Huzzah',
           'tgl_lahir' => '1992-01-10',
           'jenis_kelamin' => 'L',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ]
   ]);
});

Route::get('/sampleprofil', function(){
    DB::table('profil')->insert([
        [
            'pekerjaan' => 'mahasiswa',
            'email' => 'awe@awe.com',
            'no_telp' => '081231234123'
        ],
        [
            'pekerjaan' => 'wiraswasta',
            'email' => 'awe@awei.com',
            'no_telp' => '08123123411231233'
        ],
        [
            'pekerjaan' => 'PNS',
            'email' => 'awe@awewer.com',
            'no_telp' => '081219274816'
        ]
    ]);
});

Route::get('/samplekontak', function(){
    DB::table('contact')->insert([
        [
            'alamat' => 'alfalah',
            'no_fax' => '081231234123'
        ],
        [
            'alamat' => 'cilebut',
            'no_fax' => '081231234123'
        ],
        [
            'alamat' => 'depocc',
            'no_fax' => '0812312314123'
        ]
    ]);
});
