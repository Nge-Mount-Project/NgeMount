<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nge-Mount | About</title>
        <meta name="description" content="PFold: Paper-Like Unfolding Effect" />
        <meta name="keywords" content="css3, experiment, 3d, unfolding, fold, paper, component, element, web design, jquery, plugin, perspective" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="img/logo/2.png">
        <link rel="stylesheet" type="text/css" href="css/about/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/about/pfold.css" />
        <link rel="stylesheet" type="text/css" href="css/about/custom2.css" />
		<script type="text/javascript" src="js/about/modernizr.custom.79639.js"></script>
		<!--[if lte IE 8]><style>.support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			body {
				background-color: #1f1f1f;
			}
		</style>
    </head>
    <body>
        <div class="container">

			<header>
        <a href="{{ url('/') }}"><img src="img/logo/2.png" alt="logo" style="width:100px;align:center"></a>


        <br>
        <h1 style="size:200px;align:center;color:white">DEVELOPERS</h1>


			</header>

			<section class="main demo-2">

				<div id="grid" class="grid clearfix">

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="img/about/thumbs/1.jpg" alt="image03" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="img/about/large/1.jpg" alt="image03-large" />
							<div class="title"><h4>FRIDAY ANDITA RACHMAD SANTOSO</h4> JOMBANG <a href="http://drbl.in/eLEa" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>

          </div>
          <!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="img/about/thumbs/2.jpeg" alt="image01" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="img/about/large/2.jpeg" alt="image01-large" />
							<div class="title"><h4>RONA SAPUTRA</h4> PACITAN <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div><!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="img/about/thumbs/3.jpeg" alt="image02" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="img/about/large/3.jpeg" alt="image02-large" />
							<div class="title"><h4>FITROH GALIH PRAYOGO</h4> LAMPUNG <a href="http://drbl.in/eZoL" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div><!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="img/about/thumbs/4.jpeg" alt="image04" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="img/about/large/4.jpeg" alt="image04-large" />
							<div class="title"><h4>MUHAMMAD ABDURRAHMAN</h4> BANDUNG <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div><!-- / uc-container -->

				</div><!-- / grid -->
	<p class="info" style="size:100px;color:white">^^ Thanks For Support ^^</p>
			</section>

		</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/about/jquery.pfold.js"></script>
		<script type="text/javascript">
			$(function() {

				// say we want to have only one item opened at one moment
				var opened = false;

				$( '#grid > div.uc-container' ).each( function( i ) {

					var $item = $( this ), direction;

					switch( i ) {
						case 0 : direction = ['right','bottom']; break;
						case 1 : direction = ['left','bottom']; break;
						case 2 : direction = ['right','top']; break;
						case 3 : direction = ['left','top']; break;
					}

					var pfold = $item.pfold( {
						folddirection : direction,
						speed : 300,
						onEndFolding : function() { opened = false; },
						centered : true
					} );

					$item.find( 'span.icon-eye' ).on( 'click', function() {

						if( !opened ) {
							opened = true;
							pfold.unfold();
						}


					} ).end().find( 'span.icon-cancel' ).on( 'click', function() {

						pfold.fold();

					} );

				} );

			});
		</script>
    </body>
</html>
