<?php

namespace App\Http\Controllers;

use App\Hobby;
use App\UtsSiswa;
use Illuminate\Http\Request;


class UTSSiswaController extends Controller
{
    public function index(){
        $page = 'index';

        $siswa_list = UtsSiswa::orderBy('nim', 'asc')->paginate(5);
        $count = $siswa_list->count();
        return view('utssiswa.index', compact('page', 'siswa_list', 'count'));
    }

    public function create()
    {
        $hobbies = Hobby::pluck('hobby_name', 'id');
        return view('utssiswa.add', compact('hobbies', 'hobbies'));
    }

    public function store(Request $request){
        // $input = $request -> validate([
        //     'nim' => ['required', 'integer', 'max:5'],
        //     'nama' => ['required', 'string', 'max:30'],
        //     'angkatan' => ['required', 'integer', 'min:2015', 'max:2020'],
        //     'pfp' => ['sometimes', 'nullable', 'image', 'mimes:jpeg,jpg,png,webp,gif','max:500']
        // ]);

        $input = $request->input();
        var_dump($request->file('pfp'));
        if($request->hasFile('pfp')){
            $pfp = $request->file('pfp');
            $orig = $pfp->getClientOriginalExtension();
            if($request->file('pfp')->isValid()){
                $pfpname = date('YmdHis'). ".$orig";
                $path = 'pfp';
                $request->file('pfp')->move($path, $pfpname);
                $input['pfp'] = $pfpname;
            }
        }

        $uts_siswas = UtsSiswa::create($input);
        $uts_siswas->hobby()->attach($request->input('hobby'));


        return redirect('/uts_siswa');
    }

    public function show($id){
        $page = "show";
        $siswa = UtsSiswa::find($id);

        return view('utssiswa.show', ['show' => $siswa]);
    }

    public function edit_views($id){
        $siswa = UtsSiswa::find($id);
        return view('utssiswa.edit', ['siswa' => $siswa]);
    }

    public function do_edit($id, Request $request){
        $siswa = UtsSiswa::find($id);
        $siswa -> fill($request->post());
        $siswa -> save();

        return redirect('/uts_siswa');
    }

    public function delete($id){
        UtsSiswa::find($id)->delete();

        return redirect('/uts_siswa');
    }
}
