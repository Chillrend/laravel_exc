<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UtsSiswa;

class Hobby extends Model
{
    protected $table = 'hobbies';

    protected $fillable  = ['hobby_name'];

    public function siswa()
    {           
        return $this->belongsTo(UtsSiswa::class, 'siswas_hobbies', 'hobby_id','siswa_id');
    }
}
