<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class,'index'])->name('admin.dashboard.index');
Route::post('/filter', [DashboardController::class, 'filter'])->name('user.filter');
Route::get('/dashboard/{id}', [DashboardController::class, 'access'])->name('admin.dashboard.access');
