<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UtsSiswa extends Model
{
    protected $table = "uts_siswas";

    protected $fillable = ['nim', 'nama','alamat', 'jenis_kelamin', 'prodi', 'jurusan', 'kelas', 'angkatan'];
}
