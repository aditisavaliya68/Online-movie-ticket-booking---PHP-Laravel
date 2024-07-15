<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function index()
    {
        return view('frontend.form');
    }
    public function register(Request $request){


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
        //echo "<pre>";
       // print_r($request->all());

        $booking = new ticket;
        $booking->FirstName =$request['FirstName'];
        $booking->LastName =$request['LastName'];
        $booking->Email =$request['Email'];
        $booking->Age =$request['Age'];
        $booking->Movie =$request['Movie'];
        $booking->Movietime =$request['movietime'];
        $booking->Phone =$request['Phone'];
        $booking->Address =$request['Address'];
        $booking->save();

    }
}
