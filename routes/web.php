<?php

use App\Http\Controllers\BeritaController;
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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "nama" => "Binardi Rizi",
        "email" => "binardirizi@gmail.com",
        "img" => "binardi1.jpg"
    ]);
});

Route::get('/news', [BeritaController::class, 'index']);

Route::get('/news/{news_detil:slug}',[BeritaController::class, 'show']);
    
