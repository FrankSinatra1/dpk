<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    // пусть пока тут будет это добавление
	public function insert(Request $request)
	{
		// в реквесте у тебя данные с формы которые ты отправил с именнами инпутов
		// Post - это название модели 
		//Чтоб так добавлять нужно 2 условия выполнить
		//1 чтоб названия полей которые ты отправляешь с формы были точно такими же как в базе
		//2 написать fillable
		//Post::create($request->all());
		$gallery = new Gallery(); // Тут типа в онли перечисляешь все поля с формы кеоторые тебе нужны на случай если не все данные с фомы нужны
		$path = $request->file('photo')->store('uploads', 'public');
		$gallery->photo = $path;
		$gallery->title = $request->get('title');
		$gallery->save();
		return redirect()->back();
	}

	// пусть пока тут будет получение 
	public function index()
	{
		// в реквесте у тебя данные с формы которые ты отправил с именнами инпутов
		// Post - это название модели 
		//Чтоб так добавлять нужно 2 условия выполнить
		//1 чтоб названия полей которые ты отправляешь с формы были точно такими же как в базе
		//2 написать fillable 
		//Post::create($request->all());
		$gallery = Gallery::all();
		return view('galery', compact('gallery')); // compact('posts') - создаст массив в которой будут переменные которые ты туда отправил они будут доступны на вьюхе по таким же именам 
	}
}
