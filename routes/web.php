<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TasksController;
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

//nextlevel fungction
// Route::get('/', fn() => view('home'));

// Route::get('profile/{username}', function ($username) {
//     return view('profile', ['name'  => $username
//     ]);
// });

// Route::view('about', 'about');

Route::get('/', HomeController::class);

Route::get('profile/{identifier}', ProfileInformationController::class);


/* 
get,post,put/patch ( biasa untuk update data ) , delete  
*/

Route::get('tasks', [TasksController::class, 'index' ]);
// Route::get('tasks/create', [TasksController::class, 'create' ]); 
//route ini tidak digunakan lagi karena untuk metode create sudah digabung menjadi satu dalam fungction store pada TasksController.php  
Route::post('tasks', [TasksController::class, 'store']);
Route::get('tasks/{id}/edit', [TasksController::class, 'edit']);
Route::put('tasks/{id}', [TasksController::class, 'update']);
Route::delete('tasks/{id}', [TasksController::class, 'destroy']);

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);


