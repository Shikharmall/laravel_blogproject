<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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



//Route::view('/','login');

Route::post('/login', [AuthController::class,'login'])->name('login');

Route::view('/register','register');
Route::post('/registeruser', [AuthController::class,'register'])->name('register');




//Route::view('/dashboard','dashboard');

Route::get('/dashboard' , function(){
    if(session()->has('user')){
        return view('/dashboard');
    }
    return view('login');
});

Route::get('/dashboard', [AuthController::class,'dashboardview']);


Route::get('/' , function(){
    if(session()->has('user')){
        return redirect('/dashboard');
    }
    return view('login');
});

Route::get('/logout' , function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('/');
});






Route::view('/addblog','addblog');
Route::post('/addbloguser', [AuthController::class,'addbloguser'])->name('addbloguser');



Route::get('/edit', [AuthController::class,'edit']);
Route::post('/edituser', [AuthController::class,'edituser']);
