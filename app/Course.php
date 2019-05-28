<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'course_id';
    protected $fillable = ['course_id', 'course_name', 'course_sks'];
}
