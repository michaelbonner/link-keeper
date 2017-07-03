<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Tag;

class TagController extends Controller
{

	public function index()
	{
		$tags = Tag::orderBy('name')->get();
		return view('tag.index', compact( 'tags' ) );
	}

	public function show( Tag $tag )
	{
		$is_tag = true;
		$links = $tag->links->sortBy('comment');
		return view('tag.show', compact( 'tag', 'links', 'is_tag' ) );
	}

	public function create(){
		return view('tag.create');
	}

	public function store(){
		$this->validate( request(), [
			'name' => 'required',
			'slug' => 'required',
		]);

		$tag = Tag::create( request()->all() );
		return redirect('/tag');
	}

	public function destroy( Tag $tag ){
		$tag->delete();
		return redirect( '/tag' );
	}
}
