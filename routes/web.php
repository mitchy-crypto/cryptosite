<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;

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

// Route::get('/how-to-invest', )


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
    return 'clear user most recent request';
});

Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix'=>'admin','as' => 'admin.','middleware'=>'is_admin'], function(){
        Route::resource('pages', PageController::class);
    });
});

require __DIR__.'/auth.php';
