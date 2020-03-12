<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa(){
        $halaman = "siswa";
        $siswa = [
            'Rasmus Lesdorf',
            'Taylor Etwoll',
            'Brandon Reich',
        ];

        return view('page.siswa', compact('halaman', 'siswa'));
    }

    function create(){
        return view('page.create');
    }
}
