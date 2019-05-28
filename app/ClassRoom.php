<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'room_id';
    protected $fillable = ['room_id', 'room_name'];
}
