<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () { return view('welcome'); });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('history');
Route::get('/objective', [App\Http\Controllers\ObjectiveController::class, 'index'])->name('objective');
Route::get('/courses', [App\Http\Controllers\CoursesController::class, 'index'])->name('courses');
Route::get('/testimonials', [App\Http\Controllers\TestimonialsController::class, 'index'])->name('testimonials');
Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/signup', [App\Http\Controllers\SignUpController::class, 'index'])->name('sign-in');


#MEMBER MIDDLEWARE
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::post('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

#ADMIN MIDDLEWARE
Route::get('/admin/login', [App\Http\Controllers\AdminLoginController::class, 'index'])->name('admin-login');
Route::get('/admin/dashboard', [App\Http\Controllers\AdminDashboardController::class, 'index'])->middleware('auth.admin');







//Route::get('/test', [App\Http\Controllers\TestController::class, 'index'])->name('test');

