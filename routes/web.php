<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CategoryTypeController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('auth')->name('profile');
Route::get('/categories/{id}', [HomeController::class, 'show'])->name('categories.show');
Route::get('/categories/products/{id}', [HomeController::class, 'productshow'])->name('productshow.show');
Route::get('/categories/products/detail/{id}', [HomeController::class, 'productdetail'])->name('productdetail.show');

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


    Route::get('/admin/categories/index', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/admin/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    Route::get('/admin/category-types/index', [CategoryTypeController::class, 'index'])->name('category_types.index');
    Route::get('/admin/category-types/create', [CategoryTypeController::class, 'create'])->name('category_types.create');
    Route::post('/admin/category-types', [CategoryTypeController::class, 'store'])->name('category_types.store');
    Route::get('/admin/category-types/{id}/edit', [CategoryTypeController::class, 'edit'])->name('category-types.edit');
    Route::put('/admin/category-types/{id}', [CategoryTypeController::class, 'update'])->name('category-types.update');
    Route::delete('/admin/category-types/{id}', [CategoryTypeController::class, 'destroy'])->name('category-types.destroy');

    Route::get('/admin/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

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
