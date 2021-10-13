<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\CrudController;
use App\http\Controllers\PostcodeController;

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




Route::get('/', function(){

	return view('welcome');
});

Route::resource ('todo', CrudController::class );
Route::resource ('postcode', PostcodeController::class );
//Route::post('/todo',[\App\Http\Controllers\PostcodeController::class, 'store'])->name('get.all.fields');


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
