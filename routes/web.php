<?php

use App\Http\Controllers\MemberController;
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
    return view('home');
});

/*
Route::get('/join', function (){
    return view('auth.register');
});
*/

//Rosource route for members
Route::resources([
    'members' => MemberController::class,
]);
Route::get('/about', function (){
    return view('about');
});
Route::get('/contact', function (){
    return view('contact');
});
Route::domain('blog.' . env('APP_URL'))->group(function (){
    Route::get('/', function (){
        return view('blog');
    });
});
