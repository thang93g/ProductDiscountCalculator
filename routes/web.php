<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/input',function (){
    return view('input');
});

Route::post('/input',function (\Illuminate\Http\Request $request){
    $discountAmount = $request->price * $request->discount * 0.01;
    $discountPrice = $request->price + $discountAmount;
//    dd($request->all());
   return view('output',compact(['discountPrice','discountAmount']));
});
