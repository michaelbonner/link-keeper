@extends('layouts.master')

@section('title', 'Add New Subject')

@section('content')
<h2 class="title">Add New Subject:</h2>

@if ($errors->any())
<div class="notification is-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="/subject" method="post">

	<div class="field">
		<label class="label">Title</label>
		<p class="control has-icons-left has-icons-right">
			<input class="input" type="text" placeholder="Title" name="title" value="{{ old('title') }}">
			<span class="icon is-small is-left">
				<i class="fa fa-pencil"></i>
			</span>
		</p>
	</div>

	<div class="field">
		<label class="label">Slug</label>
		<p class="control has-icons-left has-icons-right">
			<input class="input" type="text" placeholder="Slug" name="slug" value="{{ old('slug') }}">
			<span class="icon is-small is-left">
				<i class="fa fa-pencil"></i>
			</span>
		</p>
	</div>

	<div class="field">
		<label class="label">Description</label>
		<p class="control">
			<textarea class="textarea" placeholder="Description..."
				name="description">{{ old('description') }}</textarea>
		</p>
	</div>

	<div class="field">
		<label class="label">Featured Image URL</label>
		<p class="control has-icons-left has-icons-right">
			<input class="input" type="text" placeholder="Featured Image URL" name="featured_image"
				value="{{ old('featured_image') }}">
			<span class="icon is-small is-left">
				<i class="fa fa-photo"></i>
			</span>
		</p>
	</div>

	<div class="field is-grouped">
		<p class="control">
			<button type="submit" class="button is-primary">Submit</button>
		</p>
	</div>

	{{ csrf_field() }}

</form>
@stop