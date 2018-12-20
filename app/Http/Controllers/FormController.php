<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Показать список всех пользователей приложения.
     *
     * @return Response
     */
    public function index()
    {
    	
    }

    $News = App\News::all();

	foreach ($News as $new) {
	    echo $new->title;
	}
}