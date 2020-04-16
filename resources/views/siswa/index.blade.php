@extends("page/template")

@section("main")
    <main role="main" class="container mt-5">
        <h1 class="mt-5">List Mahasiswa</h1>

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
                        <th>Prodi</th>
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
                                <a href="/siswa/{{$s->id}}" class="btn btn-info">Detail</a>
                                <a href="/siswa/delete/{{$s->id}}" onclick="return confirm('Yakin Bro?')" class="btn btn-danger">Delete</a>
                                <a href="/siswa/edit/{{ $s -> id }}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="table-nav">
                <h5>Jumlah siswa : {{$jumlah_siswa}}</h5>
                <div class="pagination">
                    {{$siswa_list->links()}}
                </div>
            </div>
            <a href="/siswa/add" class="btn btn-info">Tambah Siswa</a>
        @endif
    </main>
@stop
