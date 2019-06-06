<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    protected $table = 'jadwal_kuliah';
    
    protected $fillable = [
        'id_mata_kuliah', 'id_dosen', 'id_ruangan' 
    ];
}
