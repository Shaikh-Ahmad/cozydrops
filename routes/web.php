<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// use Illuminate\Support\Facades\Mail;
// namespace App\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/fleet', function () {
    return view('fleet');
});



Route::post('/', function (Request $request) {

   

    $data = request(['name','email','date','time','pickup','dropoff','contact','total_passengers','details','service_type1','service_type2']);
    // return $data;

   

    Illuminate\Support\Facades\Mail::to('bookings@cozydrops.com')
    ->send(new \App\Mail\BookingOrder($data));

    return redirect('/')->with('message', 'Your Booking has been placed Sucessfully');

    
});