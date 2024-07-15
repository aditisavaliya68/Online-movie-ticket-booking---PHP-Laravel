<!DOCTYPE HTML>
<html>
<head>
<title>THE SILVER SCREEN</title>
<link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript" src="js/jquery.min.js"></script>
	 	<!---strat-slider---->
	    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/slider.css')}}" />
		<script type="text/javascript" src="{{url('frontend/js/modernizr.custom.28468.js')}}"></script>
		<script type="text/javascript" src="{{url('frontend/js/jquery.cslider.js')}}"></script>
			<script type="text/javascript">
				$(function() {
				
					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});
				
				});
			</script>
		<!---//strat-slider---->
		 <!-- scroll -->
		 <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
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
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -40
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
	<!-- popup -->
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/magnific-popup1.css')]]">
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/magnific-popup.css')]]">
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<script>
					$(document).ready(function() {
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
    $(function() {
        $('#portfoliolist a').lightBox();
    });
   </script>
 <!-- nav -->  
<script type="text/javascript" 	src="{{url('frontend/js/jquery.smint.js')}}"></script>
<script type="text/javascript">
$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });
});
</script>
<script>
window.addEventListener("load",function() {
  setTimeout(function(){
    window.scrollTo(0, 1);
  }, 0);
});</script>
</head>

<style>
    p.rounded {border-style: rounded;}
</style>
<body>
<p class="rounded">A dotted border.</p>
  
</body>
</html>