<?php

use Illuminate\Support\Facades\Route;
use App\Models\Board;
use App\Models\Classify;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/', App\Http\Controllers\IndexController::class);

Route::get("/bt", function(){
    return Board::all();
});

Route::get("/ct", function(){
    return Classify::all();
});