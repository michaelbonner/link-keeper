@extends('layouts.master')

@section('title', $object->title )

@section('content')
	<h2 class="title">Edit {{ $object->title }}</h2>

	<form action="/object/{{ $object->slug }}" method="post">

		<div class="field">
			<label class="label">Title</label>
			<p class="control has-icons-left has-icons-right">
				<input class="input" type="text" placeholder="Title" name="title" value="{{ $object->title }}">
				<span class="icon is-small is-left">
					<i class="fa fa-pencil"></i>
				</span>
			</p>
		</div>

		<div class="field">
			<label class="label">Slug</label>
			<p class="control has-icons-left has-icons-right">
				<input class="input" type="text" placeholder="Slug" name="slug" value="{{ $object->slug }}">
				<span class="icon is-small is-left">
					<i class="fa fa-pencil"></i>
				</span>
			</p>
		</div>

		<div class="field">
			<label class="label">Description</label>
			<p class="control">
				<textarea name="description" class="textarea" placeholder="Description">{{ $object->description }}</textarea>
			</p>
		</div>

		<div class="field">
			<label class="label">Featured Image</label>
			<p class="control has-icons-left has-icons-right">
				<input class="input" type="text" placeholder="Featured Image" name="featured_image" value="{{ $object->featured_image }}">
				<span class="icon is-small is-left">
					<i class="fa fa-photo"></i>
				</span>
			</p>
		</div>


		<div class="field is-grouped">
			<p class="control">
				<button type="submit" class="button is-primary">Submit</button>
			</p>
			<p class="control">
				<a href="{{ URL::previous() }}" class="button is-link">Cancel</a>
			</p>
		</div>

		{{ csrf_field() }}
		{{ method_field('PATCH') }}

	</form>
@stop
