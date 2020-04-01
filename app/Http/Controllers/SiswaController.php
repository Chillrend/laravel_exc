<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function index(){
        $page = "index";
        $siswa_list = Siswa::all()->sortBy('nama_siswa');
        $jumlah_siswa = $siswa_list->count();

        return view('siswa.index', compact('page', 'siswa_list', 'jumlah_siswa'));
    }

    public function show($id){
        $page = "siswa";
        $siswa = Siswa::find($id);

        return view('siswa.show', ['siswa' => $siswa]);
    }

    public function store(Request $request){
        $input = $request -> all();
        Siswa::create($input);

        return redirect('/siswa');
    }

    public function delete($id){
        Siswa::find($id)->delete();

        return redirect('/siswa');
    }

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
