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

//Normal function
// Route::get('/', function () {
//     return view('home');
// });

//Simple fungction
//avaiable for laravel 7.4
// dd = merupakan helper Laravel untuk dumping / debugging dimana data yang ada pada variabel tersebut ditampilkan dalam model terstruktur yang dapat kita akses dengan mudah. 
//Route::get('/', fn() => dd(asset('css/app.css'))); 
Route::get('/', fn() => view('home'));

Route::get('profile', function () {
    $name = 'Gozi';
    return view('profile', [
        'name'  => $name
    ]);
});

Route::view('about', 'about');