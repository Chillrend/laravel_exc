<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hobby;

class UtsSiswa extends Model
{
    protected $table = "uts_siswas";

    protected $fillable = ['nim', 'nama','alamat', 'jenis_kelamin', 'prodi', 'jurusan', 'kelas', 'angkatan'];

    public function getNamaAttribute($value){
        return ucwords($value);
    }

    public function setNamaAttribute($value){
        $this->attributes['nama'] = strtolower($value);
    }

    public function hobby()
    {
        return $this -> belongsToMany(Hobby::class, 'siswas_hobbies', 'siswa_id', 'hobby_id')->withTimestamps();
    }
}
