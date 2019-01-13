<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
	public function insert(Request $request)
	{
		
		$path = $request->file('photo')->store('uploads', 'public');
		$news = new News();
		$news->photo = $path;
		$news->title = $request->get('title');
		$news->text = $request->get('text');
		$news->save();
		return redirect()->back();
	}

	public function index()
	{
        $news = News::paginate(3);
		return view('news', compact('news'));
	}

	public function new($new)
	{
		$new = News::where('id', $new)->first();
		$news = News::all();
		return view('ournew', compact('news', 'new'));
	}
}
