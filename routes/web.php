<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/',[AccountController::class,'Home'])->name('home');

Route::get('account/register',[AccountController::class, 'registration'])->name('account.register');
Route::get('account/login', [AccountController::class, 'login'])->name('account.login');
Route::get('account/profile', [AccountController::class, 'profile'])->name('account.profile');

Route::post('account/createuser',[AccountController::class, 'Register'])->name('account.createuser');

Route::post("account/loginuser",[AccountController::class, 'loginuser'])->name('account.loginuser');
Route::post('account/logout',[AccountController::class, 'Logout'])->name('account.logout');
Route::get('account/profile/{id}',[AccountController::class, 'getProfileData'])->name('user.profile');
Route::post('account/createpost',[PostController::class, 'createPost'])->name('post.create');

Route::get('account/posts',[PostController::class, 'getAllPosts']);
