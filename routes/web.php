<?php


use App\Http\Livewire\Email\VerifyEmail;
use App\Http\Livewire\Home;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Signup;
use App\Http\Livewire\User\Profile;
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

Route::get('/', Login::class)
    ->name("login");
Route::get('/signup', Signup::class)
    ->name('signup');
Route::get('/profile/{username}', Profile::class)
    ->name('profile');
