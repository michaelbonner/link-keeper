<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Tag;

class TagController extends Controller
{

	public function index()
	{
		$tags = Tag::all();
		return view('tag.index', compact( 'tags' ) );
	}

	public function show( Tag $tag )
	{
		$is_tag = true;
		$links = $tag->links->sortBy('comment');
		return view('tag.show', compact( 'tag', 'links', 'is_tag' ) );
	}
}
