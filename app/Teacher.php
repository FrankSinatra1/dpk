<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $table = 'teacher';

    public $fillable = [
    	'id',
    	'photo',
    	'name',
    ];
    public $timestamps = false;
}
