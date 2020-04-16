@extends("page/template")

@section('main')
    <div id="siswa">
        <h2>Edit siswa</h2>
        <div class="col-lg-8">
            <form action="{{url("uts_siswa/edit/do/".$siswa->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input name="nim" type="text" id="nim" class="form-control" value="{{ $siswa->nim }}" required/>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Siswa</label>
                    <input name="nama" type="text" id="nama" class="form-control" value="{{ $siswa->nama }}" required/>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control"required>{{ $siswa->alamat }}</textarea>
                </div>

                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" checked>
                                <label class="form-check-label" for="laki_laki">
                                    Laki Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P">
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group">
                    <label for="prodi">Program Studi</label>
                    <input name="prodi" type="text" id="prodi" class="form-control" value="{{ $siswa->prodi }}" required/>
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input name="jurusan" type="text" id="jurusan" class="form-control" value="{{ $siswa->jurusan }}" required/>
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input name="kelas" type="text" id="kelas" class="form-control" value="{{ $siswa->kelas }}" required/>
                </div>

                <div class="form-group">
                    <label for="angkatan">Angkatan</label>
                    <input name="angkatan" type="number" id="angkatan" class="form-control" value="{{ $siswa->angkatan }}" required/>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
