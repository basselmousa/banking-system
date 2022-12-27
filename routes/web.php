<?php

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
    return redirect()->route("login");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/account", [\App\Http\Controllers\Dashboard\AccountController::class, 'index'])->name("get.accounts");
Route::post("/account", [\App\Http\Controllers\Dashboard\AccountController::class, 'create'])->name("create.accounts");
Route::put("/account/{account}", [\App\Http\Controllers\Dashboard\AccountController::class, 'changeStatus'])->name("changeStatus.accounts");
Route::delete("/account/{account}", [\App\Http\Controllers\Dashboard\AccountController::class, 'destroy'])->name("delete.accounts");
