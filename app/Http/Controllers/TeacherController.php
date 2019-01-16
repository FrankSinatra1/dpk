<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
	public function insert(Request $request)
	{
		$path = $request->file('photo')->store('uploads', 'public');
		$teacher = new Teacher();
		$teacher->photo = $path;
		$teacher->name = $request->get('name');
		$teacher->save();
		return redirect()->back();
	}

	public function index()
	{
		$teacher = Teacher::all();
		return view('teacher', compact('teacher'));
	}
}
