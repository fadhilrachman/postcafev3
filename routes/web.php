<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\disposisisCtrl;
use App\Http\Controllers\userController;



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
    return view('dashboard');
});


//login & register
Route::get('/login',function(){
    return view('user.login');
})->middleware('guest');
Route::get('/register',function(){
    return view('user.register');
});
Route::post('/register',[userController::class,'register']);

Route::post('/login',[userController::class,'authanticate'])->name('login');

Route::get('/logout',[userController::class,'logout']);


//disposisis
Route::group(['middleware' => 'auth'], function () {
    Route::get("disposisis",[disposisisCtrl::class,"index"]);
    Route::get("disposisis/form",[disposisisCtrl::class,"form"]);
    Route::get("disposisis/edit/{id_disp}",[disposisisCtrl::class,'halamanEdit']);
    Route::get("disposisis/delete/{id}",[disposisisCtrl::class,"delete"]);
    Route::post("disposisis/save",[disposisisCtrl::class,"save"]);
    Route::put('disposisis/update/{id_disp}',[disposisisCtrl::class,'edit']);
});
