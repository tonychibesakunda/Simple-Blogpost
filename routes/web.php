<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Middleware;

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

//Home Controller route
Route::get('/', function () {
    return view('home');
})->name('home');

//Logged in user Dashboard
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');//->middleware('auth');

//Logout Controller route
Route::post('/logout',[LogoutController::class, 'logout'])->name('logout');

//Login Controller route
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'login']);


//Register Controller route
Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/posts', function () {
    return view('posts.index');
});
