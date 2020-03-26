@extends("page/template")

@section("main")
    <main role="main" class="container mt-5">
        <h1 class="mt-5">Siswa {{$siswa->nama_siswa}}</h1>

        @if(!empty($siswa))
            <table class="table">
                <tr>
                    <th>NISN</th>
                    <td>{{$siswa->nisn}}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{$siswa->nama_siswa}}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{$siswa->tgl_lahir}}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{$siswa->jenis_kelamin}}</td>
                </tr>
            </table>
        @endif
    </main>
@stop
