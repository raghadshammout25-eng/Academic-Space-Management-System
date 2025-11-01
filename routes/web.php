<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| هنا بتتعامل مع المسارات الخاصة بالواجهة (الويب)
*/

Route::get('/', function () {
    return redirect('/login');
});

// صفحة تسجيل الدخول
Route::get('/login', function () {
    return view('login');
})->name('login');

// معالجة تسجيل الدخول
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// صفحة لوحة التحكم (محمية)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// تسجيل الخروج
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
