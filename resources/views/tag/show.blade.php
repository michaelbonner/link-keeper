@extends('layouts.master')

@section('title', $tag->name )

@section('content')
	<h2 class="title">{{ $tag->name }} Links:</h2>

	<div class="columns is-multiline">
		@foreach( $links as $key => $link )
			@if( $link->type != 'index' )
				@component('components.simple-image-link', compact( 'link', 'is_tag' )) @endcomponent
			@endif
		@endforeach
	</div>

	<a href="/tag/delete/{{ $tag->slug }}" class="button is-danger is-outlined"><i class="fa fa-times" aria-hidden="true"></i> Delete Tag</a>
@stop
