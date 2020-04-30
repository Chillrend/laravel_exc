<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = ['nisn', 'nama_siswa', 'tgl_lahir', 'jenis_kelamin'];
    
    
    public function getTglLahirAttribute($value){
        return Carbon::parse($value);
    }
}
