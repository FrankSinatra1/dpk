<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Search extends Model
{
    use Searchable;

	public $table = 'news';

    public $fillable = [
    	'id',
    	'photo',
    	'title',
    	'text',
    ];
    public $timestamps = false;

}
