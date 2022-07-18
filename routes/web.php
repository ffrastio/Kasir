<?php

use App\Http\Controllers\Apps\DashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Auth/Login');
});

Route::prefix('apps')->group(function () {
    // Route group
    Route::group(['middleware' => ['auth']], function () {
        // Route dashboard 
        Route::get('dashboard', DashboardController::class)->name('apps.dashboard');
    });
});
