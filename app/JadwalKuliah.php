<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    protected $table = 'jadwal_kuliah';
    
    protected $fillable = [
        'id_mata_kuliah'
    ];

    public function makul(){
        return $this->belongsTo(MataKuliah::class, 'id_mata_kuliah');
    }
}
