@extends("page/template")

@section("main")
    <main role="main" class="container mt-5 mb-5" style="margin-bottom: 50px;">
        <h1 class="mt-5">List Siswa</h1>

        @if(!empty($siswa_list))
            <table class="table">
                <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Prodi</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                    <th>Angkatan</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($siswa_list as $s)
                    <tr>
                        <td>{{$s -> nim}}</td>
                        <td>{{$s -> nama}}</td>
                        <td>{{$s -> alamat}}</td>
                        <td>{{$s -> jenis_kelamin}}</td>
                        <td>{{$s -> prodi}}</td>
                        <td>{{$s -> jurusan}}</td>
                        <td>{{$s -> kelas}}</td>
                        <td>{{$s -> angkatan}}</td>

                        <td>
                            <a href="/uts_siswa/{{$s->id}}" class="btn btn-info btn-block">Detail</a>
                            <a href="/uts_siswa/delete/{{$s->id}}" onclick="return confirm('Yakin Bro?')" class="btn btn-block btn-danger">Delete</a>
                            <a href="/uts_siswa/edit/{{ $s -> id }}" class="btn btn-warning btn-block">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @if($siswa_list->count() == 0)
                <h3 style="text-align: center">Tidak ada data</h3>
            @endif
            <div class="table-nav">
                <h6>Ditampilkan {{$siswa_list->count()}} dari {{$siswa_list->total()}} mahasiswa</h6>
                <div class="pagination">
                    {{$siswa_list->links()}}
                </div>
            </div>
            <a href="/uts_siswa/add" class="btn btn-info">Tambah Siswa</a>
        @endif
    </main>
@stop
