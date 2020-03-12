@extends("page/template")

@section('main')
    <div id="siswa">
        <h2>Tambah siswa</h2>
        <div class="col-lg-8">
            <form action="{{url("siswa")}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input name="nisn" type="text" id="nisn" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="nama">Nama Siswa</label>
                    <input name="nama" type="text" id="nama" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input name="tanggal_lahir" type="date" id="tanggal_lahir" class="form-control" />
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
                    <input type="submit" class="btn btn-infog">
                </div>
            </form>
        </div>
    </div>
@endsection
