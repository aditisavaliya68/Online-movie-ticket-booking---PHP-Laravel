<!--- services --->
@extends('frontend.Layouts.main')
@section('main-container')
<div class="services sTop" id="services">
    <div class="wrap" id="jbtn1">
        <h3>WATCH TRAILER</h3>
        <p>Let's enjoy some Fun</p>
        <div class="col_1_of_3 span_1_of_3">
            <img src="{{url('frontend/images/1.png')}}" alt="">
            <p>AVATAR</p>
            <p><a href="{{url('/')}}/avatar">watch trailer</a></p>
        </div>
        <div class="col_1_of_3 span_1_of_3">
            <img src="{{url('frontend/images/4.png')}}" alt="">

            <p>PATHAN</p>
            <p><a href="{{url('/')}}/pathan">watch trailer</a></p>
        </div>
        <div class="col_1_of_3 span_1_of_3">
            <img src="{{url('frontend/images/5.jpeg')}}" alt="">

            <p>CONJURING 2</p>
            <p><a href="{{url('/')}}/conjuring2">watch trailer</a></p>
        </div>

        <div class="clear"></div>
    </div>
</div>
@endsection