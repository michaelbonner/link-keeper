<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Object;

class ObjectController extends Controller
{

	public function index()
	{
		$objects = Auth::user()->objects->sortBy('title');
		return view('object.index', compact( 'objects' ) );
	}

	public function show( Object $object )
	{
		$links = $object->links->sortBy('comment');
		return view('object.show', compact( 'object', 'links' ) );
	}

	public function create(){
		return view('object.create');
	}

	public function destroy( Object $object ){
		$object->delete();
		return redirect('/object');
	}

	public function store(){
		$this->validate( request(), [
			'title' => 'required',
			'slug' => 'required|unique:objects',
			'featured_image' => 'nullable|url'
		]);

		$object = Object::create( [
			'user_id' => Auth::id(),
			'title' => request()->title,
			'slug' => request()->slug,
			'description' => request()->description,
			'featured_image' => request()->featured_image,
		]);

		return redirect('/object');
	}
}
