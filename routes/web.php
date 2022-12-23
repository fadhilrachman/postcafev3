<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\disposisisCtrl;



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

//disposisis
Route::get("disposisis",[disposisisCtrl::class,"index"]);
Route::get("disposisis/form",[disposisisCtrl::class,"form"]);
Route::get("disposisis/edit/{id_disp}",[disposisisCtrl::class,'halamanEdit']);
Route::get("disposisis/delete/{id}",[disposisisCtrl::class,"delete"]);
Route::post("disposisis/save",[disposisisCtrl::class,"save"]);
Route::put('disposisis/update/{id_disp}',[disposisisCtrl::class,'edit']);