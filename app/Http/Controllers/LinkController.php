<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\{Link,Object,Tag};

class LinkController extends Controller
{

	public function create(){
		$objects = Object::orderBy('title')->get();
		$tags = Tag::orderBy('name')->get();
		return view('link.create', compact( 'objects', 'tags' ) );
	}

	public function store(){
		$this->validate( request(), [
			'url' => 'required|url',
			'type' => 'required',
		]);

		$link = Link::create( request()->except('tag') );
		if( request()->has('tag') ) $link->tags()->sync( array_values( request()->tag ) );
		return redirect( '/object/' . $link->object->slug );
	}

	public function edit( Link $link ){
		$tags = Tag::orderBy('name')->get();
		return view('link.edit', compact( 'link', 'tags' ) );
	}

	public function update( Link $link ){
		$tags = request()->has('tag') ? array_values( request()->tag ) : [];
		$link->tags()->sync( $tags );

		$link->update(request()->except('tag'));
		return redirect( '/object/' . $link->object->slug );
	}

	public function destroy( Link $link ){
		$link->delete();
		return redirect( '/object/' . $link->object->slug );
	}
}
