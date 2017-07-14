@extends('layouts.master')

@section('title', $object->title )

@section('content')
	<h2 class="title">{{ $object->title }} Links:</h2>

	<p>{{ $object->description }}</p>

	<h3 class="subtitle">Indexes:</h3>
	@if( $index_links->count() )
		<div class="columns is-multiline">
			@foreach( $index_links as $key => $link )
				@if( $link->type == 'index' )
					@component('components.simple-image-link', compact( 'link' )) @endcomponent
				@endif
			@endforeach
		</div>
	@else
		<p>
			<a href="/link/create?object={{ $object->id }}&amp;type=index" class="button is-success is-outlined"><i class="fa fa-plus" aria-hidden="true"></i> Add Index Link</a>
		</p>
	@endif

	<h3 class="subtitle">Singles:</h3>
	@if( $single_links->count() )
		<div class="columns is-multiline">
			@foreach( $single_links as $key => $link )
				@if( $link->type != 'index' )
					@component('components.simple-image-link', compact( 'link' )) @endcomponent
				@endif
			@endforeach
		</div>
	@else
		<p>
			<a href="/link/create?object={{ $object->id }}&amp;type=single" class="button is-success is-outlined"><i class="fa fa-plus" aria-hidden="true"></i> Add Single Link</a>
		</p>
	@endif

	<hr>

	<p>
		<a href="/link/create?object={{ $object->id }}" class="button is-success is-outlined"><i class="fa fa-plus" aria-hidden="true"></i> Add New Link</a>
	</p>

	<p>
		<a href="#" class="hidden-delete-toggle">Delete Object</a>
		<a href="/object/delete/{{ $object->slug }}" class="hidden-delete button is-danger is-outlined">Really Delete Object</a>
	</p>
	<p>
		<a href="/object/{{ $object->slug }}/edit">Edit</a>
	</p>
@stop
