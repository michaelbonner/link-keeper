@extends('layouts.master')

@section('title', 'Link Index')

@section('content')
	<h1 class="title">All tags:</h1>
	@if( $tags->count() )
		@foreach( $tags as $tag )
			<a class="tag" href="/tag/{{ $tag->slug }}">{{ $tag->name }}</a>
		@endforeach
	@endif
@stop
