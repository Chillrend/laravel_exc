@extends("page/template")

@section("main")
    <main role="main" class="container mt-5">
        <h1 class="mt-5">Mahasiswa {{$show->nama_siswa}}</h1>

        @if(!empty($show))
            <table class="table">
                <tr>
                    <th>NIM</th>
                    <td>{{$show->nim}}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{$show->nama}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{$show->alamat}}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{$show->jenis_kelamin}}</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>{{$show->prodi}}</td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td>{{$show->jurusan}}</td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>{{$show->kelas}}</td>
                </tr>
                <tr>
                    <th>Angkatan</th>
                    <td>{{$show->angkatan}}</td>
                </tr>
                <tr>
                    <th>Hobby</th>
                    <td>
                        @foreach($show->hobby as $h)
                            @if($loop->last)
                                <span> {{$h->hobby_name}}.</span>
                            @elseif($loop->first)
                                <span>{{$h->hobby_name}},</span>
                            @else
                                <span> {{$h->hobby_name}},</span>
                            @endif
                        @endforeach
                    </td>
                </tr>
            </table>
        @endif
    </main>
@stop
