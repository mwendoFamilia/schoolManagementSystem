<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;
// use App\Http\Controllers\User;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ReportsController;
use App\Http\Livewire\Schools;
use App\Http\Livewire\Todos;
use App\Http\Livewire\Classes_Component;

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

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::get('users/{name}', [UsersController::class, 'loadView']);
Route::get('/admin', function () {
    return redirect('/');
});

Route::get('users', [UsersController::class, 'loadView']);


// Route::view('/admin','admin');
// Route::get('/contact/{name}',function($name){
//     return view('/contact',['name'=>$name]);
// });
// Route::get('user/{firstname},{lastname}',[User::class,'details']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/reports', function () {
    return view('reports');
})->name('reports');

Route::middleware(['auth:sanctum', 'verified'])->get('/about', function () {
    return view('about');
})->name('about');

Route::get('todos',Todos::class);
Route::get('schools',Schools::class);
Route::get('classes',Classes_Component::class);

// Route::resource('/about', \App\Http\Controllers\AboutController::class);
// Route::resource('/reports', \App\Http\Controllers\ReportsController::class);