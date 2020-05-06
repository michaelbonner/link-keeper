@extends('layouts.master')

@section('title', 'Subject Index')

@section('content')
@if( $subjects->count() )
<div class="columns is-multiline">
	@foreach( $subjects as $key => $subject )
	<div class="column is-one-quarter">
		@if( $subject->featured_image )
		<a href="/subject/{{ $subject->slug }}"><img src="{{ $subject->featured_image }}"
				alt="{{ $subject->title }}"></a>
		@endif
		<h3 class="title">
			<a href="/subject/{{ $subject->slug }}">{{ $subject->title }}</a>
		</h3>
		<a href="/subject/{{ $subject->slug }}" class="button">View Links</a>
	</div>
	@endforeach
</div>
@else
No subjects found. <a href="/subject/create">Create one now</a> to get started.
@endif
@stop