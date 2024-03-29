<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmploymentStatusController;



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
// view('welcome');
Route::get('/', function () {
    return view ('welcome');
});


Route::get('trainess/employment_statuses', [EmploymentStatusController::class, 'index'])->name('employment_statuses.index');

