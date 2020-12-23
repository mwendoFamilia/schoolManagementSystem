<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use App\Http\Controllers\User;
use App\Http\Controllers\UsersController;

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

Route::view('/', 'home');
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