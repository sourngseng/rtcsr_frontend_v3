<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Session;

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

//for switching language route
Route::get('/lang/{locale}', function ($locale) {
	Session::put('locale', $locale);
	return redirect()->back();
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('page/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/courses-detail', [HomeController::class, 'courses_detail'])->name('courses-detail');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('page/teacher', [HomeController::class, 'teacher'])->name('teacher');
Route::get('page/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/notice', [HomeController::class, 'notice'])->name('notice');



Route::resource('post-categories', CategoryPostController::class);