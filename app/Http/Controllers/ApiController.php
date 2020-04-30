<?php

namespace App\Http\Controllers;

use App\UtsSiswa;
use Illuminate\Http\Request;
use App\Siswa;

class ApiController extends Controller
{
    public function test(){
        $col = UtsSiswa::whereIn('nama', ['Enciodas', 'Encia', 'Angelina Ajimu'])->get();
        return $col;
    }

    public function dateMutatorTest(){
        $siswa = Siswa::findOrFail(1);
        return "umur {$siswa->nama_siswa} adalah {$siswa->tgl_lahir->age} tahun";
    }
}
