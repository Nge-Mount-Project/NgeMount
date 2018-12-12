<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <!-- main -->
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
      <link rel="stylesheet" href="{{ url('/') }}/css/style.css">
      <!-- endmain -->

      <!-- //form1 -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="{{ url('/') }}/css/style1.css">
      <!-- endform -->
      <!-- icon -->
      <link rel="icon" type="image/png" href="{{ url('/') }}/img/logo/2.png" />
      <link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/demo.css" />
      <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/slideshow.css" />
      <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/slideshow_layouts.css" />
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   	@yield('news_link')
		<!-- Styles -->
      <style>
        .btn-del {
            border: none;
            background: none;
            font-size: 16px;
            cursor: pointer;
            position:absolute;
            top: 90px;
            left: 490px;
            color:red;
        }

        /* Darker background on mouse-over */
        .btn-del:hover {
            color: darkred;
        }
      </style>
      <script>document.documentElement.className = 'js';</script>
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
			@yield('content')
		</main>
		<!-- js -->
		<script src="{{ url('/') }}/js/imagesloaded.pkgd.min.js"></script>
		<script src="{{ url('/') }}/js/anime.min.js"></script>
		<script src="{{ url('/') }}/js/main.js"></script>
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
