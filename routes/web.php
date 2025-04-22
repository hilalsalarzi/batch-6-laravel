<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

return  view('welcome');
});
// Route::get('/register',[RegisterController::class, 'register']);
// laravel new projectname
// php artisan serve
Route::get('/section',SectionController::class);
Route::get('/teacher', [TeacherController::class, 'register']);
//how to call resource Controller
Route::resource('/crzy', StudentController::class);
Route::get('/register',function () {
    return view('registration');
});
// _____________________________________________
// with controller
// Route::get('hello/{id}', [RegisterController::class, 'register']);
