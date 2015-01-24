<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>@yield('title')</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href="{{ asset(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
		<link href="{{ asset(theme_path('css/style.rtl.css')) }}" rel="stylesheet" media="screen">
		<link href="{{ asset('assets/highlight/styles/tomorrow-night.css') }}" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class="container">
			<header>
				<div class="brand">
					<h1 class="page-title">
						<a href="{{ Wardrobe::route('/') }}">{{ site_title() }}</a>
					</h1>
					<h6 class="title-description">توسعه دهنده پی‌اچ‌پی و لاراول</h6>
				</div>
				<nav>
					<ul>
						<li><a href="{{ Wardrobe::route('posts.archive') }}">پست ها</a></li>
						<li><a href="{{ Wardrobe::route('posts.rss') }}">فید</a></li>
						<li><a href="{{ URL::to('http://laratalks.com/?lara-campaign=blog') }}" target="_blank">لاراتاکز</a></li>
						<li><a href="{{ URL::to('http://twitter.com/behzad_sh') }}" target="_blank">توییتر</a></li>
						<li><a href="{{ URL::to('http://github.com/behzadsh') }}" target="_blank">گیت هاب</a></li>
						<li><a href="{{ URL::to('http://ir.linkedin.com/in/behzadsh') }}" target="_blank">لینکدین</a></li>
					</ul>
				</nav>
			</header>
			<div class="content">
				@yield('content')
			</div>
			<footer>
      			<p>قدرت گرفته از <a href="http://wardrobecms.com">Wardrobe</a></p>
			</footer>
		</div>
		<script type="text/javascript" src="{{ asset('assets/highlight/highlight.pack.js') }}"></script>
		<script type="text/javascript">hljs.initHighlightingOnLoad();</script>
		{{ $_ENV['GOOGLE_ANALYTICS'] }}
	</body>
</html>
