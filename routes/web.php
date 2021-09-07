<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\UserController;

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



Auth::routes();

Route::namespace('App\Http\Controllers')->group(function () 
{
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/','FrontendController@Homes');
    //Read all the Posts
    

    Route::get('/details/{id}','HouseController@Details');

    Route::post('/book',[BookingController::class, 'Store']);
    Route::get('/myorders',[BookingController::class, 'MyOrders']);
    Route::delete('/cancelbooking/{id}',[BookingController::class, 'destroy']);
    

    Route::get('/bookhome/{id}','FrontendController@BookHome');

    Route::get('/aboutus',function(){
        return view('aboutus');
    });


    Route::get('/booking',function(){
        return view('user.mybooking');

        
    });








});
Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
    
   Route::get('/',[HouseController::class, 'dashboard']);
   
    Route::get('/home',[HouseController::class, 'index']);

    //Create a new post
   
    Route::get('/home/create',[HouseController::class, 'create']);
    Route::post('/home',[HouseController::class, 'store']); //View
   

    //Edit a POST
    
    Route::get('/home/{id}/edit',[HouseController::class, 'edit']);
    Route::post('/home/{id}',[HouseController::class, 'update']);
    

    //Show individual data
    Route::get('/home/{id}','HouseController@show');

    //Delete an individual post
    
    Route::delete('/home/{id}',[HouseController::class, 'destroy']);



    Route::get('/bookings',[BookingController::class, 'index']);
    Route::get('/confirmedbookings',[BookingController::class, 'confirmedbookings']);
    Route::delete('/bookings/{id}',[BookingController::class, 'destroybyadmin']);

    Route::get('/users',[UserController::class, 'index']);
    Route::post('/users',[UserController::class, 'store']);
    Route::get('/users/create',[UserController::class, 'create']);
    Route::post('/users/{id}',[UserController::class, 'update']);
    Route::delete('/users/{id}',[UserController::class, 'destroy']);
    Route::get('/users/{id}/edit',[UserController::class, 'edit']);
    Route::get('/bookings/confirm/{id}/{house_id}',[BookingController::class, 'confirmbooking']);
    Route::get('/bookingshistory',[BookingController::class, 'BookingsHistory']);
    Route::get('/bookings/checkedout/{id}/{house_id}',[BookingController::class, 'CheckedOut']);
    Route::get('/bookings/cancel/{id}',[BookingController::class, 'cancelbooking']);


    
});