<?php

use App\Http\Controllers\OurRegisterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front-end.pages.home');
});
Route::get('/contact', function () {
    return view('front-end.pages.form');
});
Route::post('/myalalal',[OurRegisterController::class, 'registerStore'])->name('register.store');
// ->name('register.store');
// Route::resource('/', StudentController::class);
// Route::get('/register',[RegisterController::class, 'register']);
// laravel new projectname
// php artisan serve
Route::get('/section',SectionController::class);
Route::get('/teacher', [TeacherController::class, 'register']);
//how to call resource Controller
// Route::resource('/crzy', StudentController::class);
Route::get('/register',function () {
    return view('registration');
});
// _____________________________________________
// with controller
// Route::get('hello/{id}', [RegisterController::class, 'register']);
Route::get('/controll-statement',function () {
    return view('controll-statement');
});

Route::get('/loop',function () {
    return view('loop');
});

Route::get('/register-table',[OurRegisterController::class, 'registerShow']);
