@extends('layouts.master')

@section('title', 'Object Index')

@section('content')
	@if( $objects->count() )
		<div class="columns is-multiline">
			@foreach( $objects as $key => $object )
				<div class="column is-one-quarter">
					<a href="/object/{{ $object->slug }}"><img src="{{ $object->featured_image }}" alt="{{ $object->title }}"></a>
					<a href="/object/{{ $object->slug }}"><h3 class="title">{{ $object->title }}</h3></a>
					<p>{{ $object->description }}</p>
					<a href="/object/{{ $object->slug }}" class="button">View Links</a>
				</div>
			@endforeach
		</div>
	@endif
@stop
