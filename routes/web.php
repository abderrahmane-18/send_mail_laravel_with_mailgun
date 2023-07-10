<?php

use App\Mail\testingMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facades\Debugbar;
use Symfony\Component\ErrorHandler\Debug;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    Debugbar::info('infi');
    return view('welcome');
});
Route::get('/send', function () {
    
 Mail::to('abderrahmaneboukhezar99@gmail.com')->send(new testingMail());
 return response('sending');
});