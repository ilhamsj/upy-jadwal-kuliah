<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    protected $table = 'jadwal_kuliah';
    
    protected $fillable = [
        'id_mata_kuliah', 
        'id_dosen',
        'id_ruangan',
        'id_kelas',
        'hari',
        'pukul',
        'status',
        'kelas',
    ];

    public function makul(){
        return $this->belongsTo(MataKuliah::class, 'id_mata_kuliah');
    }

    public function dosen(){
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

    public function ruangan(){
        return $this->belongsTo(Ruangan::class, 'id_ruangan');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
