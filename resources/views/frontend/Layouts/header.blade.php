 <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>THE SILVER SCREEN</title>
	<link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="text/javascript" src="{{url('/frontend/js/jquery.min.js')}}"></script>
	<!---strat-slider---->
	<link rel="stylesheet" type="text/css" href="{{url('/frontend/css/slider.css')}}" />
	<script type="text/javascript" src="{{url('/frontend/js/modernizr.custom.28468.js')}}"></script>
	<script type="text/javascript" src="{{url('/frontend/js/jquery.cslider.js')}}"></script>
	<script type="text/javascript">
		$(function () {

			$('#da-slider').cslider({
				autoplay: true,
				bgincrement: 450
			});

		});
	</script>
	<!---//strat-slider---->
	<!-- scroll -->
	<script type="text/javascript">
		$(document).ready(function () {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};


			$().UItoTop({ easingType: 'easeOutQuart' });

		});

		$(document).ready(function(){
			$("#jbtn1").hover(function(){
			$(a).mouseover(function () {
				$(this).css("color", "yellow");
			});

			$(a).mouseout(function () {
				$(this).css("color", "white");
			});
		});
	});


	

		$(document).ready(function () {
			$("#jbtn").hover(function(){
				$("a").mouseover(function () {
					$(this).css("color", "yellow");
				});

				$("a").mouseout(function () {
					$(this).css("color", "white");
				});
			});

		});
	</script>
	<!-- //scroll -->
	<!-- start portfolios -->
	<link href="{{url('frontend/css/portfolio.css')}}" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="{{url('frontend/js/fliplightbox.min.js')}}"></script>
	<script type="text/javascript">
		$('body').flipLightBox()
	</script>
	<script type="text/javascript" src="{{url('frontend/js/jquery.easing.min.js')}}"></script>
	<script type="text/javascript" src="{{url('frontend/js/jquery.mixitup.min.js')}}"></script>
	<script type="text/javascript">
		$(function () {

			var filterList = {

				init: function () {

					// MixItUp plugin
					// http://mixitup.io
					$('#portfoliolist').mixitup({
						targetSelector: '.portfolio',
						filterSelector: '.filter',
						effects: ['fade'],
						easing: 'snap',
						// call the hover effect
						onMixEnd: filterList.hoverEffect()
					});

				},

				hoverEffect: function () {

					// Simple parallax effect
					$('#portfoliolist .portfolio').hover(function () {
						$(this).find('.label').stop().animate({
							bottom: 0
						}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({
							top: -40
						}, 500, 'easeOutQuad');
					}, function () {
						$(this).find('.label').stop().animate({
							bottom: -40
						}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({
							top: 0
						}, 300, 'easeOutQuad');
					});

				}
			};

			// Run the show!
			filterList.init();

		});
	</script>
	<!-- popup -->
	<link rel="stylesheet" type="text/css" href="{{url('frontend/css/magnific-popup1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('frontend/css/magnific-popup.css')}}">
	<script src="{{url('frontend/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<script type="text/javascript" src="{{url('frontend/js/jquery.lightbox.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{url('frontend/css/lightbox.css')}}" media="screen" />
	<script type="text/javascript">
		$(function () {
			$('#portfoliolist a').lightBox();
		});
	</script>
	<!-- nav -->
	<script type="text/javascript" src="{{url('frontend/js/jquery.smint.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.subMenu').smint({
				'scrollSpeed': 1000
			});
		});
	</script>
	<script>
		window.addEventListener("load", function () {
			setTimeout(function () {
				window.scrollTo(0, 1);
			}, 0);
		});</script>
</head>

<body>
	<!-- start slider -->
	<div class="slider_bg s7">
		<!-- start main -->
		<!---start-da-slider----->
		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2 class="title">THE SILVER SCREEN</h2>
				<h3 class="title">MOVIE</h3>
				<p class="description">KIDS ,ACTION ,COMEDY ,HORROR</p>
			</div>
			<div class="da-slide">
				<h2 class="title">THE SILVER SCREEN</h2>
				<h3 class="title">SNACKS</h3>
				<p class="description">POP-CORN ,DRINKS</p>
			</div>

		</div>
		<!---//End-da-slider----->
	</div>
	<a href="#services" class="button scroll"><img src="{{url('frontend/images/arrow.png')}}"></a>
	<!-- start header -->
	<div class="header">
		<div class="logo">
			<a href="#s7" class="scroll"><img src="{{url('frontend/images/roxy.png')}}"></a>
		</div>
		<!-- start top-nav-->
		<div class="h_right">
			<div class="subMenu">
				<div class="wrap">
					<div class="inner" id="jbtn">
						<a href="{{url('/')}}/trailer" id="jbtn4" class="subNavBtn">TRAILER</a>
						<a href="{{url('/')}}/movie" id="jbtn4" class="subNavBtn">MOVIE</a>
						<a href="{{url('/')}}/ticket" id="jbtn4" class="subNavBtn end">TICKET</a>
						<a href="{{url('/')}}/food" id="jbtn4" class="subNavBtn">FOOD</a>
						<a href="{{url('/')}}/contact" id="jbtn4" class="subNavBtn end">CONTACT</a>

					</div>
					<!-- /.navbar-collapse -->
					<a id="s7" class="right-msg subNavBtn msg-icon" href="#"><span> </span></a>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- start smart_nav * -->
			<nav class="nav">
				<ul class="nav-list">
					<li class="nav-item"><a href="{{url('/')}}/trailer">Trailer</a></li>
					<li class="nav-item"><a href="{{url('/')}}/movie" class="scroll">Movie</a></li>
					<li class="nav-item"><a href="{{url('/')}}/ticket" class="scroll">Ticket</a></li>
					<li class="nav-item"><a href="{{url('/')}}/food" class="scroll">food</a></li>
					<li class="nav-item"><a href="{{url('/')}}/contact" class="scroll">Contact</a></li>
					<div class="clear"></div>
				</ul>
			</nav>
			<script type="text/javascript" src="{{url('frontend/js/responsive.menu.js')}}"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
	</div>
	<!---//End-header--->