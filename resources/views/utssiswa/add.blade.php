@extends("page/template")

@section('main')
    <div id="siswa">
        <h2>Tambah siswa</h2>
        <div class="col-lg-8">
            <form action="{{url("uts_siswa")}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input name="nim" type="number" id="nim" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Siswa</label>
                    <input name="nama" type="text" id="nama" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required ></textarea>
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
                    <input type="text" name="prodi" id="prodi" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label for="angkatan">Angkatan</label>
                    <input type="number" maxlength="4" name="angkatan" id="angkatan" class="form-control" required/>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
