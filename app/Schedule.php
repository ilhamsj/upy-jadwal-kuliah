<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['course_id'];

    public function course() {
        return $this->belongsTo('App\Schedule');
    }
}
