<!doctype html>
<html lang="en">
  <head>
    <title>booking-view</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <a href="{{route('booking.back')}}" >
                    <button class="btn btn-primary btn-lg btn-block" style="margin-top:30px;">Back</button>
  </a>
  <br>
      <div class="container"><table class="table">
      <thead class="thead-dark">
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Age</th>
                <th>Movie</th>
                <th>Movietime</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($booking as $bookings)

            <tr>
                <td>{{$bookings->FirstName}}</td>
                <td>{{$bookings->LastName}}</td>
                <td>{{$bookings->Email}}</td>
                <td>{{$bookings->Age}}</td>
                <td>{{$bookings->Movie}}</td>
                <td>{{$bookings->Movietime}}</td>
                <td>{{$bookings->Phone}}</td>
                <td>{{$bookings->Address}}</td>
                <td>
                    <a href="{{route('booking.delete',['id'=>$bookings->id])}}">
                    <button class="btn btn-danger">Delete</button>
                    </a>
                    <a href="{{route('booking.edit',['id'=>$bookings->id])}}">
                    <button class="btn btn-primary">Edit</button>
                    </a>
                </td>
            </tr>
           @endforeach
        </tbody>
      </table></div>

    
    
  </body>
</html>