<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <!-- main -->
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
      <link rel="stylesheet" href="css/style.css">
      <!-- endmain -->

      <!-- //form1 -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/style1.css">
      <!-- endform -->
      <!-- icon -->
      <link rel="icon" type="image/png" href="img/logo/2.png" />
      <link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="css/demo.css" />
      <link rel="stylesheet" type="text/css" href="css/slideshow.css" />
		<link rel="stylesheet" type="text/css" href="css/slideshow_layouts.css" />
      <link rel="stylesheet" type="text/css" href="css/cariBarengan/cari.css" />
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   	@yield('news_link')
      <script>document.documentElement.className = 'js';</script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body>

		<!-- file svg -->
		<svg class="hidden">
			<defs>
				<symbol id="icon-prev" viewBox="0 0 100 50">
					<title>prev</title>
					<polygon points="5.4,25 18.7,38.2 22.6,34.2 16.2,27.8 94.6,27.8 94.6,22.2 16.2,22.2 22.6,15.8 18.7,11.8"/>
				</symbol>
				<symbol id="icon-next" viewBox="0 0 100 50">
					<title>next</title>
					<polygon points="81.3,11.8 77.4,15.8 83.8,22.2 5.4,22.2 5.4,27.8 83.8,27.8 77.4,34.2 81.3,38.2 94.6,25 "/>
				</symbol>
			</defs>
		</svg>

		<!-- end file svg -->

		<!-- main -->
		<main style="overflow:hidden;">
			<!-- header -->
			<header class="codrops-header">
				<a href="{{ url('/') }}"><img src="img/logo/logo.png" class="codrops-header__title" style="width:230px;margin-top:5px;"></img></a>
				<p class="codrops-header__tagline">handheld and circle the world</p>
				<!-- sidebar -->
            @guest
				<nav class="dummy-links">
					<a class="dummy-links__link" href="{{ route('login') }}">Login</a>
					<a class="dummy-links__link" href="{{ route('features') }}">Features</a>
					<a class="dummy-links__link" href="{{ route('news') }}">News</a>
					<a class="dummy-links__link" href="{{ route('about')}}">About</a>
				</nav>
            @else
            <img src="/uploads/{{ Auth::user()->avatar }}" alt="..." style="width:50px;height:50px;border-radius:50%;margin-right: 70px;margin-top: 30px">
            <nav class="dummy-links">
                   <a href="{{ route('main') }}" class="dummy-links__link">
                       {{ Auth::user()->username }} <span class="caret"></span>
                   </a>
					<a class="dummy-links__link" href="{{ route('news') }}">News</a>
                   <form action="{{ route('logout') }}" method="POST" class="dummy-links__link">
                       @csrf
                       <input type="submit" value="Logout" style="background: none;border:none"  class="dummy-links__link">
                   </form>
            </nav>
            @endguest
			</header>
			@yield('content')
		</main>
		<!-- js -->
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/cariBarengan/cari.js"></script>
		<script>
		(function() {
			var slideshow = new MLSlideshow(document.querySelector('.slideshow'));

			document.querySelector('#next-slide').addEventListener('click', function() {
				slideshow.next();
			});

			document.querySelector('#prev-slide').addEventListener('click', function() {
				slideshow.prev();
			});
		})();
		</script>
	</body>
</html>
