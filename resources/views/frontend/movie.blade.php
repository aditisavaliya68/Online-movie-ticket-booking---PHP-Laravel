@extends ('frontend.Layouts.main')

@section('main-container')
        <!----start-blog---->
				<div class="blog s3" id="movie">
					<div class="wrap"> 
						<div class="blog-head">
							<h3>MOVIES</h3><br><br>
					
						</div>
						<div class="blog-grid">
							<div class="blog-left">
							 	<div class="img-left">
							 		<img src="{{url('frontend/images/a1.jpg')}}" alt="" />
							 	</div>	
							 	<div class="text-right">
							 		<h6>Dec 16, 2022</h6>
							 		<h3><a href="#">AVTAR</a></h3>
							 		<img src="{{url('frontend/images/line.png')}}" alt="" />
							 		<p>The Sci-fi movie</p>
							 		<p><a href="time.blade.php">showtime</a></p>
							 	</div>
							    <div class="clear"> </div>
							</div>
							<div class="blog-right">
							 	<div class="img-left">
							 		<img src="{{url('frontend/images/a2.jpg')}}" alt="" />
							 	</div>	
							 	<div class="text-right">
							 		<h6>jan 25, 2023</h6>
							 		<h3><a href="#">PATHAN</a></h3>
							 		<img src="{{url('frontend/images/line.png')}}" alt="" />
							 		<p>The Action and Thriller movie</p>
							 		<p><a href="time.blade.php">showtime</a></p>
							 	</div>
							    <div class="clear"> </div>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="blog-grid">
							<div class="blog-left">
							 	<div class="img-left">
							 		<img src="{{url('frontend/images/a3.jpg')}}" alt="" />
							 	</div>	
							 	<div class="text-right">
							 		<h6>June 10, 2016 </h6>
							 		<h3><a href="#">CONZURING 2</a></h3>
							 		<img src="{{url('frontend/images/line.png')}}" alt="" />
							 		<p>The horror movie</p>
							 		<p><a href="time.blade.php">showtime</a></p>
							 	</div>
							    <div class="clear"> </div>
							</div>
							<div class="blog-right">
							 	<div class="img-left">
							 		<img src="{{url('frontend/images/a4.jpg')}}" alt="" />
							 	</div>	
							 	<div class="text-right">
							 		<h6>Nov 14, 2010</h6>
							 		<h3><a href="#">TANGLED</a></h3>
							 		<img src="{{url('frontend/images/line.png')}}" alt="" />
							 		<p>The cartoon movie</p>
							 		<p><a href="time.blade.php">showtime</a></p>
							 	</div>
							    <div class="clear"> </div>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
				</div>
 @endsection