<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;

class SearchController extends Controller
{
	public function query(Request $request)
    {
    	$search_value = $request->get('search');
        $search = Search::where('title', 'LIKE', '%'. $search_value . '%')->get();
        
        return view('search', compact('search'));
    }
}
