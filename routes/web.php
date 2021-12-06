<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Home1Controller;

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
    return view('welcome');
});
/*回傳home頁面
Route::get('home', function (){
    return view('home.index');
});
*/
/*使用controller來回傳home頁面*/
Route::get('home',[HomeController::class,"index"])->name("home.index");

Route::get('hello/{name?}',[HelloController::class,"index"])->name("hello.index");
/*
Route::get('home1', function (){
    return view('home1.index');
});
*/

Route::get('home1',[Home1Controller::class, 'index'])->name('home1.index');
