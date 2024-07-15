@extends('frontend.Layouts.main')
@section('main-container')

    {{-- <div id="small-dialog" class="mfp-hide">
    <div class="pop_up">
         <div class="payment-online-form-left"> --}}
    <section style="padding: 300px; background-image:"{{url('frontend/images/ticket.jpg')}}">
       {{-- <style> 
            input {
              width: 80%;
            }
            </style>--}}
      <div style="color: rgb(10, 10, 10); font-size: 50px; background-image:"{{url('frontend/images/ticket.jpg')}};555555555555555">  <center><h1>{{$title}}</h1></center></div><br><br><br>

        <form action="{{$url}}" method="post" style="background-color:rgb(203, 89, 89)">
            @csrf
            <br>
            <div class="container">
                <div class="form-group">
                    <center><label for="FirstName"> First Name:</label>
                        <input type="text" name="FirstName" class="form-control" size="80" placeholder="Enter your First Name" value="{{$booking->FirstName}}"><br>
                        <span class="text-danger">
                            @error('FirstName')
                                {{ $message }} 
                            @enderror
                        </span><br>
                </div><br></center>
                <div class="form-group">
                    <center><label for=""> Last Name:</label>
                        <input type="text" name="LastName" id="" class="form-control" size="80" placeholder="Enter your Last Name" value="{{$booking->LastName}}"/><br>
                        <span class="text-danger">
                            @error('LastName')
                                {{ $message }}
                            @enderror
                        </span> <br>
                </div><br></center>
                <div class="form-group">
                    <center><label for="">Email:</label>
                    <input type="email" name="Email" id="" class="form-control" size="80" placeholder="Enter your Email" aria-describedby="helpId" value="{{$booking->Email}}"/><br>
                    <span class="text-danger">
                        @error('Email')
                            {{ $message }}
                        @enderror
                    </span><br>
                </div><br></center>
                <div class="form-group">
                    <center><label for="">Age:</label>
                        <input type="text" name="Age" id="" class="form-control" size="80" placeholder="Enter your Age " value="{{$booking->Age}}"/><br>
                        <span class="text-danger">
                            @error('Age')
                                {{ $message }}
                            @enderror
                        </span><br>
                </div><br></center>
                <div class="form-group">
                    <center><label for="">Movie:</label>
                        <input type="text" name="Movie" id="" class="form-control" size="80"placeholder="Enter your Movie Name" value="{{$booking->Movie}}"/><br>
                        <span class="text-danger">
                            @error('Movie')
                                {{ $message }}
                            @enderror
                        </span><br>
                </div><br></center>
                <div class="form-group">
                    <center><label for="">Movietime:</label>
                        <input type="text" name="Movietime" id="" class="form-control" size="80" placeholder="Enter Movie Time " value="{{$booking->Movietime}}"/><br>
                        <span class="text-danger">
                            @error('Movietime')
                                {{ $message }}
                            @enderror
                        </span><br>
                </div><br></center>
                <div class="form-group">
                    <center><label for="">Phone:</label>
                        <input type="text" name="Phone" id="" class="form-control" size="80" placeholder="Enter your Phone no." value="{{$booking->Phone}}"/><br>
                        <span class="text-danger">
                            @error('Phone')
                                {{ $message }}
                            @enderror
                        </span><br>
                </div><br></center>
                <div class="form-group">
                    <center><label for="">Address:</label>
                        <input type="text" name="Address" id="" class="form-control" size="80" placeholder="Enter your Address" value="{{$booking->Address}}"/><br>
                        <span class="text-danger">
                            @error('Address')
                                {{ $message }}
                            @enderror
                        </span>
                </div><br></center>
                
                <ul class="payment-sendbtns">
                    <li><input type="reset" value="Cancel"></li>
                    <li><input type="submit" value="submit"></li>
                </ul>
            </div>
        </form>
    </section>
    
     {{-- <center><form method="post" action="insert.php">
        <h5 style="font-size:5vw;">Ticket Booking</h5>
                <h2><b><span class="Booking"> </span><font color="black"></font></b></h2><br><br>

                <ul>
                    <li><input type="text" name="FirstName" value="First Name"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}">  </li><br>
                    <span class="text-danger">
                            @error('FirstName')
                                {{ $message }}
                            @enderror
                        </span>
                    <li><input type="text" name="LastName" value="Last Name"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li><br>
                       <span class="text-danger">
                            @error('LastName')
                                {{ $message }}
                            @enderror
                        </span> 
                </ul>
                <ul>
                    <li><input type="email" name="Email" value="Email"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li><br>
                    <span class="text-danger">
                            @error('Email')
                                {{ $message }}
                            @enderror
                        </span>
                    <li><label for="Age">Age : </label>
                        <input type="number" name="Age" value="Age" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Age';}"></li><br>
                    <span class="text-danger">
                            @error('Age')
                                {{ $message }}
                            @enderror
                        </span>
                </ul>
                <ul>
                    <li><input type="text" name="Movie" value="movie"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'movie';}"></li><br>
                    <span class="text-danger">
                            @error('Movie')
                                {{ $message }}
                            @enderror
                        </span>
                    <li><input type="text" name="Movietime" value="movietime"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'movietime';}"></li><br>
                    <span class="text-danger">
                            @error('Movietime')
                                {{ $message }}
                            @enderror
                        </span>
                </ul>
                <ul>
                    <li><input type="tel" name="phone" value="Phone"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li><br>
                    <span class="text-danger">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>
                    <li><input type="text" name="address" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
                    <span class="text-danger">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
              
                <ul class="payment-sendbtns">
                    <li><input type="reset" value="Cancel"></li>
                    <li><input type="submit" value="submit"></li>
                </ul>
                <div class="clear"> </div>
            </form></center> --}}

    {{--             
        </div>
      </div>
</div> --}}
    <!-----pop-up-grid---->
@endsection
