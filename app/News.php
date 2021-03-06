<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $table = 'news';

    public $fillable = [
    	'id',
    	'photo',
    	'title',
    	'text',
    ];
    public $timestamps = false;
}

