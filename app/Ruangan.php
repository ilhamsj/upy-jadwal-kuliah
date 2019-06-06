<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = "ruangan";
    
    protected $fillable = [
        'kd_ruangan', 'nama_ruangan',
    ];
}
