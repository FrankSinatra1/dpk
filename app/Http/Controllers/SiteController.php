<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\News;

class SiteController extends Controller
{

	public function index()
	{
        $news = News::paginate(3);
			return view('welcome', compact('news'));
	}

}
