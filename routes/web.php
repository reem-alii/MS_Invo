<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

Route::get('/', function () {
    return view ('auth.login');
});

Auth::routes();

Route::get('/{page}', [App\Http\Controllers\AdminController::class, 'index'])->middleware('auth');

Route::get('/invo', [App\Http\Controllers\InvoicesController::class, 'index']);
//Route::resource( 'invo' ,'App\Http\Controllers\InvoicesController');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
