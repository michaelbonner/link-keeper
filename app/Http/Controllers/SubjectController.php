<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Subject;

class SubjectController extends Controller
{

	public function index()
	{
		$subjects = request()->user()->subjects()->orderBy('title')->get();
		return view('subject.index', compact('subjects'));
	}

	public function show(Subject $subject)
	{
		$index_links = $links = $subject->links()->where('type', 'index')->orderBy('comment')->get();
		$single_links = $links = $subject->links()->where('type', '!=', 'index')->orderBy('comment')->get();
		return view('subject.show', compact('subject', 'index_links', 'single_links'));
	}

	public function create()
	{
		return view('subject.create');
	}

	public function destroy(Subject $subject)
	{
		$subject->delete();
		return redirect('/subject');
	}

	public function edit(Subject $subject)
	{
		return view('subject.edit', compact('subject'));
	}

	public function update(Subject $subject)
	{
		$subject->update(request()->all());
		return redirect('/subject/' . $subject->slug);
	}

	public function store()
	{
		$this->validate(request(), [
			'title' => 'required',
			'slug' => 'required|unique:subjects',
			'featured_image' => 'nullable|url'
		]);

		Subject::create([
			'user_id' => Auth::id(),
			'title' => request()->title,
			'slug' => request()->slug,
			'description' => request()->description,
			'featured_image' => request()->featured_image,
		]);

		return redirect('/subject');
	}
}
