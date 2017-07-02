<div class="column is-one-quarter">
	@if( $link->thumbnail )
		<a href="http://nullrefer.com/?{{ $link->url }}">
			<img src="{{ $link->thumbnail }}" alt="{{ $link->comment }}">
		</a>
	@endif
		<h3 class="subtitle">
			<a href="http://nullrefer.com/?{{ $link->url }}">
				{{ $link->comment }}
			</a>
			<a href="/link/{{$link->id}}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
		</h3>
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
</div>
