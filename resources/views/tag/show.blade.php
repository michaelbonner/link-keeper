@extends('layouts.master')

@section('title', $tag->name )

@section('content')
	<h2>Links:</h2>

	<h3>Indexes:</h3>
	<div class="columns is-multiline">
		@foreach( $links as $key => $link )
			@if( $link->type == 'index' )
				@component('components.simple-image-link', compact( 'link' )) @endcomponent
			@endif
		@endforeach
	</div>

	<h3>Singles:</h3>
	<div class="columns is-multiline">
		@foreach( $links as $key => $link )
			@if( $link->type != 'index' )
				@component('components.simple-image-link', compact( 'link' )) @endcomponent
			@endif
		@endforeach
	</div>

	<a href="/tag" class="button">Back</a>
@stop
