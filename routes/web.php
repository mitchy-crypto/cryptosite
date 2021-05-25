<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\InvestStatsController;

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
})->name('index');

Route::get('/about-us', function () {
    return view('welcome');
})->name('about-us');

Route::resource('/how-to-invest', InvestStatsController::class);

Route::group(['middleware' => ['auth','verified']], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/make-deposit', function () {
        return view('dashboard');
    })->name('deposit');
    Route::get('/your-deposits', function () {
        return view('dashboard');
    })->name('your-deposits');
    Route::get('/transactions', function () {
        return view('dashboard');
    })->name('transactions');
    Route::get('/withdraw', function () {
        return view('dashboard');
    })->name('withdraw');
});

Route::get('/timeelapsed', function(){
    request()->session()->forget('confirmdeposit');
    return redirect('/make-deposit');
});

Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix'=>'admin','as' => 'admin.','middleware'=>'is_admin'], function(){
        Route::resource('dashboard', DashboardController::class);
    });
    Route::get('/admin/users', function () {
        return view('dashboard');
    })->name('users');
    Route::get('/admin/userstransactions', function () {
        return view('dashboard');
    })->name('userstransactions');
});

require __DIR__.'/auth.php';
