<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController; //<---- Import del controller precedentemente creato!
use App\Http\Controllers\Admin\MessaggiController; 
use App\Http\Controllers\Admin\NavbarContoller; 
use App\Http\controllers\AuthRoleController;



use App\models\Message;

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






Route::middleware(['auth'])->prefix('admin') ->name('admin.') ->group(function () {
    
    //Siamo nel gruppo quindi:
    // - il percorso "/" diventa "admin/"
    // - il nome della rotta ->name("dashboard") diventa ->name("admin.dashboard")
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/sms', [MessaggiController::class,'index'])->name('index');
    Route::get('/sms/create', [MessaggiController::class,'create'])->name('sms.create');
    Route::post('/sms', [MessaggiController::class, 'store'])->name('sms.store');
    Route::get('/role', [AuthRoleController::class, 'getClientData']);
    Route::get('/client', [ClientController::class, 'show'])->name('dashboard');
    Route::get('/navbar', [NavbarContoller::class, 'index'])->name('navbar');


});

require __DIR__ . '/auth.php';
