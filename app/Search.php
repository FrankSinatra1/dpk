<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
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
