@extends('layouts.master')

@section('title', $tag->name )

@section('content')
	<h2 class="title">{{ $tag->name }} Links:</h2>

	<h3 class="subtitle">Indexes:</h3>
	<div class="columns is-multiline">
		@foreach( $links as $key => $link )
			@if( $link->type == 'index' )
				@component('components.simple-image-link', compact( 'link', 'is_tag' )) @endcomponent
			@endif
		@endforeach
	</div>

	<h3 class="subtitle">Singles:</h3>
	<div class="columns is-multiline">
		@foreach( $links as $key => $link )
			@if( $link->type != 'index' )
				@component('components.simple-image-link', compact( 'link', 'is_tag' )) @endcomponent
			@endif
		@endforeach
	</div>

	<a href="/tag" class="button">Back</a>
@stop
