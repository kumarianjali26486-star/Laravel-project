<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return redirect()->route('users.index');
});

Route::resource('/admin/users', UserController::class);

