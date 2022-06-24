<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Post;
use App\Models\Specialist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
     {
        $doctor= Doctor::limit(4)->get();
        $specialist= Specialist:: limit(10)->get();
        $posts= Post :: limit(3)->get();

       return view('home', compact('doctor','specialist','posts'));
   }
//    public function doctorInHome($id){
//     $doctor = Doctor :: findorFail($id);
//     return view ('home', compact('doctor'));
//   }


   
    

    public function index()
    {
        $doctor = Doctor :: all();
        return view ('doctors',compact('doctor'));
    }  

    public function specialistDoctor($id)
    {
        // dd($id);
        $specialist = Specialist :: find($id);
        // dd($specialist);
        // dd($specialist->doctor());
        $doctor_list = $specialist->doctors()->get();
        // return($doctor_list); 
        return view('specialist',compact('specialist','doctor_list'));
        
       
    }

    public function booking()
    {
    
        return view ('booking_form');
    } 

    public function all_post()
    {
        $all_posts= Post:: all();
        return view ('all_post',compact('all_posts'));
    }
    public function post_details ($id)

    { 
        
        $post_details= Post :: findorFail($id);
       
        return view ('post_details',compact('post_details'));
    }


    // public function EmergencyDoctor (){
    //     $doctor = Doctor:: where('specialist_id','1')->get();
    //     return view ('EmergencyDoctor',compact('doctor'));

    // }  
    // public function gynecology (){
    //     $doctor = Doctor::where('specialist_id','3')->get();
    
    //     return view ('gynecology', compact('doctor'));
    // } 
    // public function neuromedicine (){
    //     $doctor= Doctor:: where('specialist_id','4')->get();
    
    //     return view ('neuromedicine',compact('doctor'));
    // } 
    // public function orthopedics (){
    // $doctor= Doctor:: where('specialist_id','5')->get();
    //     return view ('orthopedics',compact('doctor'));
    // } 
    // public function hematologist (){
    //     $doctor = Doctor:: where('specialist_id','6')->get();
    //     return view ('hematologist',compact('doctor'));
    // } 
    // public function cancerSpecialist(){
    // $doctor=Doctor:: where('specialist_id','7') ->get();
    //     return view ('cancer_specialist',compact('doctor'));
    // } 
    // public function skin_specialist(){
    // $doctor = Doctor:: where('specialist_id','8')->get();
    //     return view ('skin_specialist',compact('doctor'));
    // } 
    // public function sex_specialist(){
    //     $doctor = Doctor:: where('specialist_id','9')->get();
    //     return view ('sex_specialist',compact('doctor'));
    // } 
    // public function medicine_specialist(){
    //     $doctor = Doctor:: where('specialist_id','11')->get();
    //     return view ('medicine_specialist',compact('doctor'));
    // } 
    // public function dentists(){
    //     $doctor = Doctor:: where('specialist_id','10')->get();
    //     return view ('dentists',compact('doctor'));

    // } 

}

