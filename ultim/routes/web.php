<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::resource('users', AuthController::class);

Route::get('/', function () {
 return view('welcome');
});
Route::middleware(['auth'])->group(function() {
    Route::get('/home', [AuthController::class, 'index']);
});


