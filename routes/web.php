<?php

use App\Http\Controllers\DashboardController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
	return view('home', [
		'title'	=> "Home",
		'active'=> "home"
	]);
});

Route::get('/about', function () {
	return view('about', [
		'title'	=> "about",
		'active'=> "about",
		'nama' 	=> "Sahrul Mahani",
		'nim'		=> "21515028",
		'image'	=> "https://www.kindpng.com/picc/m/24-248729_stockvader-predicted-adig-user-profile-image-png-transparent.png"
	]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get("/posts/{post:slug}", [PostController::class, 'show']);

Route::get('/categories', function() {
	return view('categories', [
		'title'	=> 'Post Categories',
		'active'=> "categories",
		'categories' => Category::all()
	]);	
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');