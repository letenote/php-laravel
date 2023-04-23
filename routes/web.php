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
    return redirect('/login');
});

Route::controller(\App\Http\Controllers\UserController::class) -> group(function (){
    Route::get('/login', 'login')->middleware(\App\Http\Middleware\GuestMiddleware::class);
    Route::post('/login', 'doLogin')->middleware(\App\Http\Middleware\GuestMiddleware::class);
    Route::get('/register', 'register')->middleware(\App\Http\Middleware\GuestMiddleware::class);
    Route::post('/register', 'doRegister')->middleware(\App\Http\Middleware\GuestMiddleware::class);
    Route::post('/logout', 'doLogout')->middleware(\App\Http\Middleware\UserMiddleware::class);
});

Route::controller(\App\Http\Controllers\StaffController::class) -> group(function (){
    Route::get('/staff', 'home')
        ->middleware(\App\Http\Middleware\UserMiddleware::class)
        ->middleware(\App\Http\Middleware\RoleStaffMiddleware::class);
    Route::get('/staff/mailbox', 'mailbox')
        ->middleware(\App\Http\Middleware\UserMiddleware::class)
        ->middleware(\App\Http\Middleware\RoleStaffMiddleware::class);
    Route::get('/staff/project', 'project')
        ->middleware(\App\Http\Middleware\UserMiddleware::class)
        ->middleware(\App\Http\Middleware\RoleStaffMiddleware::class);
});

Route::controller(\App\Http\Controllers\AdminController::class) -> group(function (){
    Route::get('/administrator', 'home')
        ->middleware(\App\Http\Middleware\UserMiddleware::class)
        ->middleware(\App\Http\Middleware\RoleAdminMiddleware::class);
    Route::get('/administrator/mailbox', 'mailbox')
        ->middleware(\App\Http\Middleware\UserMiddleware::class)
        ->middleware(\App\Http\Middleware\RoleAdminMiddleware::class);
    Route::get('/administrator/project', 'project')
        ->middleware(\App\Http\Middleware\UserMiddleware::class)
        ->middleware(\App\Http\Middleware\RoleAdminMiddleware::class);
    Route::get('/administrator/project/add', 'projectAdd')
        ->middleware(\App\Http\Middleware\UserMiddleware::class)
        ->middleware(\App\Http\Middleware\RoleAdminMiddleware::class);
});
