<div class="column is-one-quarter">
	<a href="http://nullrefer.com/?{{ $link->url }}">
		@if( $link->thumbnail )
			<img src="{{ $link->thumbnail }}" alt="{{ $link->comment }}">
		@endif
		<h3>{{ $link->comment }}</h3>
		@if( $link->tags )
			@foreach( $link->tags as $tag )
				<a class="tag" href="/tag/{{ $tag->slug }}">{{ $tag->name }}</a>
			@endforeach
		@endif
	</a>
</div>
