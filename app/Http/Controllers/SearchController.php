<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;

class SearchController extends Controller
{
	public function query(Request $request)
    {
    	$search_value = $request->get('search');
        $search = Search::search("{{$search_value}}")->paginate(1);
        return view('search', compact('search'));
    }
}
