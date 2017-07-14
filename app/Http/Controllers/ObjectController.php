<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Object;

class ObjectController extends Controller
{

	public function index()
	{
		$objects = Auth::user()->objects()->orderBy('title')->get();
		return view('object.index', compact( 'objects' ) );
	}

	public function show( Object $object )
	{
		$index_links = $links = $object->links()->where('type','index')->orderBy('comment')->get();
		$single_links = $links = $object->links()->where('type','!=','index')->orderBy('comment')->get();
		return view('object.show', compact( 'object', 'index_links', 'single_links' ) );
	}

	public function create(){
		return view('object.create');
	}

	public function destroy( Object $object ){
		$object->delete();
		return redirect('/object');
	}

	public function edit( Object $object ){
		return view('object.edit', compact( 'object' ) );
	}

	public function update( Object $object ){
		$object->update( request()->all() );
		return redirect( '/object/' . $object->slug );
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
