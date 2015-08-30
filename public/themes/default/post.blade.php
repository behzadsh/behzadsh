@extends(theme_view('layout'))

@section('title')
	{{ $post->title }}
@stop

@section('content')
	<section>
		<h2 class="title">{{ $post->title }}</h2>

		{{ $post->parsed_content }}

		@include(theme_view('inc.tags'))

        <div class="sharethis">
            <div class="sharethis-container">
                <span class='st_facebook_hcount' displayText='Facebook'></span>
                <span class='st_twitter_hcount' displayText='Tweet'></span>
                <span class='st_linkedin_hcount' displayText='LinkedIn'></span>
                <span class='st_email_hcount' displayText='Email'></span>
            </div>
        </div>

        {{ Disqus::comments() }}
	</section>
@stop

