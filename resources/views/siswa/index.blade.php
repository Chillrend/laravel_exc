@extends("page/template")

@section("main")
    <main role="main" class="container mt-5">
        <h1 class="mt-5">List Siswa</h1>

        @if(!empty($siswa_list))
            <table class="table">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa_list as $s)
                        <tr>
                            <td>{{$s -> nisn}}</td>
                            <td>{{$s -> nama_siswa}}</td>
                            <td>{{$s -> tgl_lahir}}</td>
                            <td>{{$s -> jenis_kelamin}}</td>
                            <td><a href="/siswa/{{$s->id}}" class="btn btn-info">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h3>Jumlah siswa : {{$jumlah_siswa}}</h3>
            <a href="/siswa/add" class="btn btn-info">Tambah Siswa</a>
        @endif
    </main>
@stop
