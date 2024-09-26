<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminRoleMiddleware;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AppointmentController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//user routes
Route::get('/home',[HomeController::class, 'index']);
Route::get('/store',[ProductController::class, 'store'])->name('store');
Route::get('/appointments', [AppointmentController::class, 'Uindex']);
Route::post('appointments/create' ,[AppointmentController::class, 'create'])->name('user.book');


//admin specific routes
Route::middleware(['admin'])->group(function() {
    Route::get('/adminpage', [HomeController::class, 'page']);
    Route::get('/admin/manageP', [ProductController::class, 'index'])->name('admin.manageP');
    Route::get('/admin/manageU',[UserController::class, 'index'])->name('admin.manageU');
    Route::get('admin/manageO',[HomeController::class, 'ordersPage'])->name('admin.manageO');
    Route::get('product/edit/{item}', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/admin/manageO',[OrderController::class, 'index'])->name('admin.manageO');
    Route::get('admin/manageA',[AppointmentController::class, 'index'])->name('admin.manageA');
    Route::get('order/view/{orderId}/items', [OrderController::class, 'show'])->name('orders.show');
    
    Route::post('product/update/{item}', [ProductController::class, 'update'])->name('prodcut.update');
    Route::post('order/delete',[OrderController::class,'delete'])->name('order.delete');
    Route::post('product/save',[ProductController::class, 'save'])->name('product.save');
    Route::post('product/delete',[ProductController::class, 'delete'])->name('product.delete');
    Route::post('user/delete',[UserController::class, 'delete'])->name('user.delete');
    Route::post('order/update-status',[OrderController::class, 'update'])->name('admin.updateStatus');
    Route::post('appointments/delete',[AppointmentController::class, 'delete'])->name('appointments.delete');
});