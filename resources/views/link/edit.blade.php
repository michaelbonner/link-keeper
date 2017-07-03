@extends('layouts.master')

@section('title', $link->title )

@section('content')
	<h2 class="title">Edit Link:</h2>

	<form action="/link/{{ $link->id }}" method="post">

		<div class="field">
			<label class="label">Comment</label>
			<p class="control has-icons-left has-icons-right">
				<input class="input" type="text" placeholder="Comment" name="comment" value="{{ $link->comment }}">
				<span class="icon is-small is-left">
					<i class="fa fa-pencil"></i>
				</span>
			</p>
		</div>

		<div class="field">
			<label class="label">Thumbnail</label>
			<p class="control has-icons-left has-icons-right">
				<input class="input" type="text" placeholder="Thumbnail" name="thumbnail" value="{{ $link->thumbnail }}">
				<span class="icon is-small is-left">
					<i class="fa fa-photo"></i>
				</span>
			</p>
		</div>

		<div class="field">
			<label class="label">URL</label>
			<p class="control has-icons-left has-icons-right">
				<input class="input" type="text" placeholder="URL" name="url" value="{{ $link->url }}">
				<span class="icon is-small is-left">
					<i class="fa fa-link"></i>
				</span>
			</p>
		</div>

		<div class="field">
			<label class="label">Type</label>
			<p class="control">
				<span class="select">
					<select name="type">
						<option value="index" @if( $link->type=='index') selected="selected" @endif>Index</option>
						<option value="single" @if( $link->type=='single') selected="selected" @endif>Single</option>
					</select>
				</span>
			</p>
		</div>


		<div class="field">
			<p class="control">
				@if( $tags->count() )
					@foreach( $tags as $tag )
						<label class="checkbox">
							<input type="checkbox" value="{{ $tag->id }}" name="tag['{{ $tag->slug }}']" @if( $link->tags->pluck('slug')->containsStrict( $tag->slug ) ) checked="checked" @endif>
							{{ $tag->name }}
						</label>
					@endforeach
				@endif
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

	<a href="/link/delete/{{ $link->id }}" class="button is-danger is-outlined"><i class="fa fa-times" aria-hidden="true"></i> Delete Link</a>

@stop
