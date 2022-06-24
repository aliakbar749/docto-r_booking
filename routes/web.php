<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor_profileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Models\Doctor;
use App\Models\Specialist;
use App\Models\Post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Route::get('/', function () {
//      $doctor= Doctor::limit(4)->get();
//     return view('home', compact('doctor'));
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
// Route::get('/{id}', [HomeController::class, 'doctorInHome'])->name('home');
Route::get('/doctors', [HomeController::class, 'index'])->name('doctors');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/doctor_profile', [Doctor_profileController::class, 'index'])->name('Doctor_profile');
Route::get('/doctor_profile/{id}', [Doctor_profileController::class, 'doctorProfile'])->name('Doctor_profile');
Route::get('/specialist/{id}',[HomeController::class,'specialistDoctor'])->name('AllSpecialist');
Route::get('/all_post',[HomeController::class,'all_post'])->name('All_Post');
Route::get('/Details/{id}',[HomeController::class,'post_details'])->name('Post_Details');
Route::get('/booking_form',[HomeController::class,'booking'])->name('Booking_form');
Route::post('/bookin_info',[Doctor_profileController::class,'booking'])->name('Booking_Form');

// Route::get('/emergencydoctor', [HomeController::class,'EmergencyDoctor'])->name('EmergencyDoctor');
// Route::get('/gynecology',[HomeController::class,'gynecology'])->name('GynecologyDoctor');
// Route::get('/neuromedicine',[HomeController::class,'neuromedicine'])->name('NeuromedicineDoctor');
// Route::get('/orthopedics',[HomeController::class,'orthopedics'])->name('OrthopedicsDoctor');
// Route::get('/hematologist',[HomeController::class,'hematologist'])->name('HematologistDoctor');
// Route::get('/cancer_specialist',[HomeController::class,'cancerSpecialist'])->name('Cancer_SpecialistDoctor');
// Route::get('/skin_specialist',[HomeController::class,'skin_specialist'])->name('skin_specialistDoctor');
// Route::get('/sex_specialist',[HomeController::class,'sex_specialist'])->name('sex_specialistDoctor');
// Route::get('/medicine_specialist',[HomeController::class,'medicine_specialist'])->name('medicine_specialistDoctor');
// Route::get('/dentists',[HomeController::class,'dentists'])->name('Dentists');




// category wise doctor show

// Route::get('/category_doctor',[])

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
