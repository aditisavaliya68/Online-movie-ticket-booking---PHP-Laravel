<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;

class bookingController extends Controller
{
  
    public function index()
    {
        $url=url('/booking');
        $title="Make Your Reservation";
        $booking = new booking;
        $data=compact('url','title','booking'); 
        return view('frontend.booking')->with($data);

    }

    public function register(Request $request)
    {
       $request->validate(
        [
           
           'FirstName' => 'required',
           'LastName' => 'required',
           'Email' => 'required|email',
           'Age' => 'required|integer',
           'Movie' => 'required',
           'Movietime' => 'required',
           'Phone' => 'required|integer',
           'Address' => 'required'
        ]
       );
        //echo  "< pre>";
        //print_r($request->all());
         

        $booking = new booking;
        $booking->FirstName = $request['FirstName'];
        $booking->LastName = $request['LastName'];
        $booking->Email = $request['Email'];
        $booking->Age = $request['Age'];
        $booking->Movie = $request['Movie'];
        $booking->Movietime = $request['Movietime'];
        $booking->Phone = $request['Phone'];
        $booking->Address = $request['Address'];
        $booking->save();

      
        return redirect('/booking/view');

    }


    public function view()
    {
        $booking=booking::all();
        $data = compact('booking');
        return view('booking-view')->with($data);
        
    }

  public function delete($id)
  {
  $booking=booking::find($id);
      if(!is_null($booking))
      {
       $booking->delete();
      }
      return redirect('booking/view');
  }

 public function edit($id)
 {
     $booking=booking::find($id);
      if(is_null($booking))
      {
        return redirect('booking/view');
      }
      else
      {
        $title="Update Your Data";
        $url=url('/booking/update').'/'.$id;
        $data=compact('booking','url','title');
        return view('frontend.booking')->with($data);  

      }
 }
  public function update($id,Request $request)
  {
    $booking=booking::find($id);

        $booking->FirstName = $request['FirstName'];
        $booking->LastName = $request['LastName'];
        $booking->Email = $request['Email'];
        $booking->Age = $request['Age'];
        $booking->Movie = $request['Movie'];
        $booking->Movietime = $request['Movietime'];
        $booking->Phone = $request['Phone'];
        $booking->Address = $request['Address'];
        $booking->save();
    return redirect('/booking/view');
  }

  public function back()
  {
    return redirect('booking');
  } 

}
