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

	public function new(){
		$link = Link::create( request()->except('tag') );
		$link->tags()->sync( array_values( request()->tag ) );
		return redirect( '/object/' . $link->object->slug );
	}

	public function edit( Link $link ){
		$tags = Tag::orderBy('name')->get();
		return view('link.edit', compact( 'link', 'tags' ) );
	}

	public function update( Link $link ){
		if( ! Auth::user()->objects->pluck('id')->contains( $link->id ) ){
			return 'oh boy, you did something bad';
		}

		$link->tags()->sync( array_values( request()->tag ) );

		$link->update(request()->except('tag'));
		return redirect( '/object/' . $link->object->slug );
	}
}
