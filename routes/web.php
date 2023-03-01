<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
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
Route::get('/databaseview', function() {
    return view('databaseview');
});

/*
Route::get('/join', function (){
    return view('auth.register');
});
*/

//Rosource route for members
Route::resources([
    'members' => MemberController::class,
    'users' => UserController::class,
    'posts' => PostController::class,
    'comments' => CommentController::class,
]);
Route::get('/about', function (){
    return view('about');
});

Route::get('/emails.contact', [ContactFormController::class, 'Contactindex'])->name('contact');
Route::post('/submit', [ContactFormController::class, 'sendContactMail'])->name('sendContact');