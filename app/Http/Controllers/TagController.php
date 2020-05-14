<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Tag;

class TagController extends Controller
{

	public function index()
	{
		$tags = request()->user()->tags()->orderBy('name')->get();
		return view('tag.index', compact('tags'));
	}

	public function show($tag)
	{
		$is_tag = true;
		$tag = $links = request()
			->user()
			->tags()
			->where('slug', $tag)
			->firstOrFail();
		$links = $tag
			->links
			->sortBy('comment');
		return view('tag.show', compact('tag', 'links', 'is_tag'));
	}

	public function create()
	{
		return view('tag.create');
	}

	public function store()
	{
		$this->validate(request(), [
			'name' => 'required',
			'slug' => 'required',
		]);

		request()
			->user()
			->tags()
			->create(
				request()->all()
			);
		return redirect('/tag');
	}

	public function destroy(Tag $tag)
	{
		request()->user()->tags()->find($tag->id)->delete();
		return redirect('/tag');
	}
}
