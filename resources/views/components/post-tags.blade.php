<ul aria-label="The post has the following tags" {{ $attributes->merge(['class' => 'flex flex-row flex-wrap -mx-1']) }}>
    @if($tags)
		@foreach ($tags as $tag)
			<li class="px-1 pb-1">
				<x-link title="See all posts tagged with {{ $tag }}" :href="route('posts.index', ['filterByTag' => $tag])">{{ $tag }}</x-link>
			</li>
		@endforeach
	@endif
</ul>