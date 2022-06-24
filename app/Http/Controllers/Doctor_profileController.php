<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Booking;
use Illuminate\Support\Carbon;


class Doctor_profileController extends Controller
{
    public function doctorProfile($id){
        $doctor = Doctor :: findorFail($id);
        return view ('doctor_details', compact('doctor'));
      }
    
    public function booking(Request $request){

      
      $document = $request -> file('document');
      $up_location = 'fortend/images/document/';
      Booking::insert([
        'name'=> $request -> name,
        'phone'=> $request -> phone_number,
        'email'=> $request -> email,
        'booking_date'=> $request -> booking_date,
        'visiting_reason' => $request -> visiting_reason,
        'visit_before' => $request -> seen_before,
        'document'=> $request -> document,
        'updated_at'=>  Carbon::now(),
        'created_at'=> Carbon::now()
        // 'updated_at'=>$request->format('d.m.Y'),
        
        // 'created_at'=> $request->format('d.m.Y')
      ]);
      // $booking= new Booking();
      // $booking -> name= $request ->name;
      
      // $booking -> save();
      // return redirect()->back();
    }


}

