<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = "mata_kuliah";
    protected $fillable = [
        'kd_mata_kuliah', 'nama_mata_kuliah', 'sks'
    ];
}
