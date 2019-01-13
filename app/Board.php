<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public $table = 'board';

    public $fillable = [
    	'id',
    	'photo',
    	'name',
    ];
    public $timestamps = false;
}
