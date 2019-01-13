<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class BoardController extends Controller
{
    public function insert(Request $request)
	{
		$path = $request->file('photo')->store('uploads', 'public');
		$board = new Board();
		$board->photo = $path;
		$board->name = $request->get('name');
		$board->save();
		return redirect()->back();
	}

	public function index()
	{
		$board = Board::all();
		return view('board', compact('board'));
	}
}
