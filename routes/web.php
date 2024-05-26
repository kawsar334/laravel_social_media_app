<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;



Route::get('/',[AccountController::class,'Home'])->name('home');

Route::get('account/register',[AccountController::class, 'registration'])->name('account.register');
Route::get('account/login', [AccountController::class, 'login'])->name('account.login');
Route::get('account/profile', [AccountController::class, 'profile'])->name('account.profile');

Route::post('account/createuser',[AccountController::class, 'Register'])->name('account.createuser');

Route::post("account/loginuser",[AccountController::class, 'loginuser'])->name('account.loginuser');
Route::post('account/logout',[AccountController::class, 'Logout'])->name('account.logout');
Route::get('account/profile/{id}',[AccountController::class, 'getProfileData'])->name('user.profile');
