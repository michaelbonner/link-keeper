<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Subject;
use App\Models\Tag;

class LinkController extends Controller
{

	public function create()
	{
		$subjects = Subject::orderBy('title')->get();
		$tags = Tag::orderBy('name')->get();
		return view('link.create', compact('subjects', 'tags'));
	}

	public function store()
	{
		$this->validate(request(), [
			'url' => 'required|url',
			'type' => 'required',
		]);

		$link = Link::create([
			'subject_id' => request()->subject,
			'url' => request()->url,
			'type' => request()->type,
			'comment' => request()->comment,
			'thumbnail' => request()->thumbnail,
		]);
		if (request()->has('tag')) $link->tags()->sync(array_values(request()->tag));
		return redirect('/subject/' . $link->subject->slug);
	}

	public function edit(Link $link)
	{
		$tags = Tag::orderBy('name')->get();
		return view('link.edit', compact('link', 'tags'));
	}

	public function update(Link $link)
	{
		$tags = request()->has('tag') ? array_values(request()->tag) : [];
		$link->tags()->sync($tags);

		$link->update(request()->except('tag'));
		return redirect('/subject/' . $link->subject->slug);
	}

	public function destroy(Link $link)
	{
		$link->delete();
		return redirect('/subject/' . $link->subject->slug);
	}
}
