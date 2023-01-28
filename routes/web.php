<?php

use App\Http\Controllers\Users\DeleteUserController;
use App\Http\Controllers\Users\EditUserController;
use App\Http\Controllers\Users\IndexUserController;
use App\Http\Controllers\Users\ShowUserController;
use App\Http\Controllers\Users\UpdateUserController;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'User', 'prefix' => 'users', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', [IndexUserController::class, '__invoke'])->name('admin.user.index');
    Route::get('/{user}', [ShowUserController::class, '__invoke'])->name('admin.user.show');
    Route::get('/{user}/edit', [EditUserController::class, '__invoke'])->name('admin.user.edit');
    Route::patch('/{user}', [UpdateUserController::class, '__invoke'])->name('admin.user.update');
    Route::delete('/{user}', [DeleteUserController::class, '__invoke'])->name('admin.user.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
