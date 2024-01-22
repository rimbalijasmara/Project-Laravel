<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ContactController;

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
    return view('welcome');
});

Route::get('/contact',function(){
    return view('template.contact',
    ['title' => 'contact']);
});

Route::get('/index',function(){
    return view('template.index',
    ['title' => 'home']);
});

Route::get('/contact', [ContactController::class, 'index']);