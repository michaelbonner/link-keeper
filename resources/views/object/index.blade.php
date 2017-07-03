@extends('layouts.master')

@section('title', 'Object Index')

@section('content')
	@if( $objects->count() )
		<div class="columns is-multiline">
			@foreach( $objects as $key => $object )
				<div class="column is-one-quarter">
					@if( $object->featured_image )
						<a href="/object/{{ $object->slug }}"><img src="{{ $object->featured_image }}" alt="{{ $object->title }}"></a>
					@endif
					<h3 class="title">
						<a href="/object/{{ $object->slug }}">{{ $object->title }}</a>
					</h3>
					<a href="/object/{{ $object->slug }}" class="button">View Links</a>
				</div>
			@endforeach
		</div>
	@endif

	<hr>
	
	<p>
		<a href="/object/create" class="button">New Object</a>
	</p>
@stop
