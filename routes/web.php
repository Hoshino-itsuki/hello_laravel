<?php
namespace App\Http\Controllers;
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
Route::get('/',[StaticPagesController::class, 'home'])->name('home');
Route::get('/help',[StaticPagesController::class, 'help'])->name('help');
Route::get('/about',[StaticPagesController::class, 'about'])->name('about');

Route::get('/singup',[UsersController::class,'create'])->name('singup');