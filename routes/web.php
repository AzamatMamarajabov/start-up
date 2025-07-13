<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\CustomersController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('auth')->name('profile');
Route::get('/edit-profile', [HomeController::class, 'editProfile'])->middleware('auth')->name('edit-profile');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::post('/edit-profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

});




Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminAuthController::class, 'profile'])->name('admin.profile');
    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


    Route::get('/admin/customer', [CustomersController::class, 'index'])->name('customer.index');
    Route::get('/admin/customer/create', [CustomersController::class, 'create'])->name('customer.create');
    Route::post('/admin/customer/store', [CustomersController::class, 'store'])->name('customer.store');
    Route::get('/admin/customer/{id}/edit', [CustomersController::class, 'edit'])->name('customer.edit');
    Route::post('/admin/customer/{id}/update', [CustomersController::class, 'update'])->name('customer.update');
    Route::delete('/admin/customer/{id}', [CustomersController::class, 'destroy'])->name('customer.destroy');
});


// Route::get('profile', function () {
//     return view('profile', ['user' => auth()->user()]);
// })->middleware('auth')->name('profile');


// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');
//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

require __DIR__.'/auth.php';
