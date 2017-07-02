<div class="column is-one-quarter">
	<a href="http://nullrefer.com/?{{ $link->url }}">
		@if( $link->thumbnail )
			<img src="{{ $link->thumbnail }}" alt="{{ $link->comment }}">
		@endif
		<h3>{{ $link->comment }}</h3>
		@if( $link->tags )
			<p>
				@foreach( $link->tags as $tag )
					<a class="tag" href="/tag/{{ $tag->slug }}">{{ $tag->name }}</a>
				@endforeach
			</p>
		@endif
		@if( @$is_tag )
			<p>
				<a href="/object/{{ $link->object->slug }}">{{ $link->object->title }}</a>
			</p>
		@endif
	</a>
</div>
