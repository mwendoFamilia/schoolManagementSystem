<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use App\Http\Controllers\UsersController;
// use App\Http\Controllers\ReportsController;
use App\Http\Livewire\Address as LivewireAddress;
use App\Http\Livewire\Schools;
use App\Http\Livewire\Reports;
use App\Http\Livewire\Todos;
use App\Http\Livewire\Classes_Component;
use App\Http\Livewire\Exams;
use App\Models\Address;

use App\Models\Exam;

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('forms', 'forms')->name('forms');
    Route::get('reports', Reports::class)->name('reports');
    Route::view('cards', 'cards')->name('cards');
    Route::view('charts', 'charts')->name('charts');
    Route::view('buttons', 'buttons')->name('buttons');
    Route::view('modals', 'modals')->name('modals');
    Route::view('tables', 'tables')->name('tables');
    Route::view('calendar', 'calendar')->name('calendar');
});

Route::group([
    'middleware' => 'auth.role', 'role' => 'admin',
], function () {
    Route::get('schools', Schools::class)->name('schools');
    Route::get('classes', Classes_Component::class)->name('classes');
});

Route::group([
    'middleware' => 'auth.role', 'role' => 'teacher',
], function () {

    Route::get('classes', Classes_Component::class)->name('classes');
    Route::get('classes', Classes_Component::class)->name('classes');
    Route::get('classes', Classes_Component::class)->name('classes');
    Route::get('classes', Classes_Component::class)->name('classes');
});
Route::get('/', function () {
    return view('welcome');
});
