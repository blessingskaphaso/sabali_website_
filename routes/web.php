<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/about', 'about')->name('about');


/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

});

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/api/dashboard/updates', [DashboardController::class, 'getUpdates']);

    /*
    |--------------------------------------------------------------------------
    | Client Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware('role:client')->group(function () {

        Route::get('/loans', [LoanController::class, 'index'])->name('loans.index');
        Route::get('/loans/apply', [LoanController::class, 'create'])->name('loans.create');
        Route::post('/loans', [LoanController::class, 'store'])->name('loans.store');
        Route::get('/loans/{loan}', [LoanController::class, 'show'])->name('loans.show');

        Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
        Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
    });

    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware('role:admin')
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {

            Route::get('/loans', [LoanController::class, 'adminIndex'])->name('admin.loans.index');
            Route::get('/loans/pending', [LoanController::class, 'pending'])->name('admin.loans.pending');

            Route::post('/loans/{loan}/approve', [LoanController::class, 'approve'])->name('admin.loans.approve');
            Route::post('/loans/{loan}/reject', [LoanController::class, 'reject'])->name('admin.loans.reject');
            Route::post('/loans/{loan}/disburse', [LoanController::class, 'disburse'])->name('admin.loans.disburse');

            Route::get('/payments', [PaymentController::class, 'adminIndex'])->name('admin.payments.index');
            Route::get('/reports', [DashboardController::class, 'reports'])->name('admin.reports');
        });
});
