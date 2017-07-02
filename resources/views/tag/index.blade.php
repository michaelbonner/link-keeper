@extends('layouts.master')

@section('title', 'Link Index')

@section('content')
	@if( $tags->count() )
		<div class="columns is-multiline">
			@foreach( $tags as $key => $tag )
				<div class="column is-one-quarter">
					<a href="/tag/{{ $tag->slug }}"><h3>{{ $tag->name }}</h3></a>
				</div>
			@endforeach
		</div>
	@endif
@stop
