@extends ('frontend.Layouts.main')

@section('main-container')
        <div class="pricing s5" id="ticket">
            <div class="wrap"> 
                <div class="pricing-head">
                    <h3>TICKET PRICE</h3>
                    <P></P>						
                </div>								
                    <div class="pricing-grids">
                            <div class="pricing-grid1">	
                                <h3><a href="#">₹<span>399</span><p>------</p></a></h3>						
                                <div class="price-value">
                                    <a href="#">General Admission</a>
                                </div>
                                <img src="{{url('frontend/images/border.png')}}" alt="" />
                                
                                <div class="cart1">
                                    <div class="span3"><a class="popup-with-zoom-anim" href="{{url('/')}}/booking "><j>BUY</j></a>
                                </div>	
                                </div>
                            </div>
                            <div class="pricing-grid2">
                                <h3><a href="#">₹<span>199</span><p>------</p></a></h3>
                                <div class="price-value">
                                    <a href="#">CHILDREN 5-11 years OLD</a>
                                </div>
                                <img src="{{url('frontend/images/border.png')}}" alt="" />
                                
                                <div class="cart1">
                                    <div class="span3"><a class="popup-with-zoom-anim" href="{{url('/')}}/booking "><k>BUY</k></a>
                                </div>	
                                </div>
                            </div>
                            <div class="pricing-grid3">	
                                <h3><a href="#">₹<span>0</span><p>------</p></a></h3>						
                                <div class="price-value">
                                    <a href="#">UNDER 5 years OLD</a>
                                </div>	
                                <img src="{{url('frontend/images/border.png')}}" alt="" />									
                                
                                <div class="cart1">
                                    <div class="span3"><a class="popup-with-zoom-anim" href="{{url('/')}}/booking "><l>BUY</l></a>
                                </div>	
                                </div>
                            </div>																											
                                <!-----pop-up-grid---->
                                    
                                </div>
                <div class="clear"> </div>
               </div>
        </div>
 @endsection
       
