@extends('layouts.master')

@section('title', 'Add New Tag')

@section('content')
	<h2 class="title">Add New Tag:</h2>

	@if ($errors->any())
		<div class="notification is-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="/tag" method="post">

		<div class="field">
			<label class="label">Name</label>
			<p class="control has-icons-left has-icons-right">
				<input class="input" type="text" placeholder="Name" name="name" value="{{ old('name') }}">
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

		<div class="field is-grouped">
			<p class="control">
				<button type="submit" class="button is-primary">Submit</button>
			</p>
		</div>

		{{ csrf_field() }}

	</form>
@stop
