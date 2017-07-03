@extends('layouts.master')

@section('title', $object->title )

@section('content')
	<h2 class="title">{{ $object->title }} Links:</h2>

	<p>{{ $object->description }}</p>

	<h3 class="subtitle">Indexes:</h3>
	<div class="columns is-multiline">
		@foreach( $links as $key => $link )
			@if( $link->type == 'index' )
				@component('components.simple-image-link', compact( 'link' )) @endcomponent
			@endif
		@endforeach
	</div>

	<h3 class="subtitle">Singles:</h3>
	<div class="columns is-multiline">
		@foreach( $links as $key => $link )
			@if( $link->type != 'index' )
				@component('components.simple-image-link', compact( 'link' )) @endcomponent
			@endif
		@endforeach
	</div>

	<a href="#" class="hidden-delete-toggle button is-danger is-outlined"><i class="fa fa-times" aria-hidden="true"></i> Delete Object</a>
	<a href="/object/delete/{{ $object->slug }}" class="hidden-delete button is-danger is-outlined">Really Delete Object</a>
@stop
