<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\{Link,Tag};

class LinkController extends Controller
{

	public function edit( Link $link ){
		$tags = Tag::all();
		return view('link.edit', compact( 'link', 'tags' ) );
	}

	public function update( Link $link ){
		if( ! Auth::user()->objects->contains( $link->id ) ){
			return 'oh boy, you did something bad';
		}

		$link->tags()->sync( array_values( request()->tag ) );

		$link->update(request()->except('tag'));
		return redirect( '/object/' . $link->object->slug );
	}
}
