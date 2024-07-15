@extends ('frontend.Layouts.main')

@section('main-container')
        <!---- fun ---->
				<div class="team-members s2" id="about"></div>
				<div class="fun">
					<div class="wrap"> 
						<div class="fun-head">
							<h3>SNACKS AND DRINKS</h3><br><br>							
						</div>
						<div class="fun-head-grids">
							<div class="fun-head-grid">
								<img src="{{url('frontend/images/i2.png')}}" alt="" />
								<h4>₹150</h4>
								<h5>ICECREAM</h5>						
							</div>
							<div class="fun-head-grid">
								<img src="{{url('frontend/images/i3.png')}}" alt="" />
								<h4>₹199</h4>
								<h5>COLD AND HOT COFFEE</h5>					
							</div>
							<div class="fun-head-grid">
								<img src="{{url('frontend/images/i6.jpg')}}" alt="" />
								<h4>₹99</h4>
								<h5>POP-CORN</h5>								
							</div>
							<div class="fun-head-grid">
								<img src="{{url('frontend/images/i5.png')}}" alt="" />
								<h4>₹120</h4>
								<h5>DRINKS</h5>								
							</div>
							<div class="clear"> </div>
						</div>
					</div>
				</div>
 @endsection