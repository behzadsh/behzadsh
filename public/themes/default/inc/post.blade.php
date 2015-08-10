<div class="post">
	<h2><a href="{{ Wardrobe::route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
	<div class="date">{{ date("M/d/Y", strtotime($post->publish_date)) }}</div>
	<div class="content">
		{{ $post->parsed_intro }}
	<div class="read-more"><a href="{{ Wardrobe::route('posts.show', $post->slug) }}">ادامه مطلب ←</a></div>
	</div>
</div>
