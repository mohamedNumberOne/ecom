<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::get('/about_us', [CompanyController::class, "index"])->name('about_us');
Route::get('/', [CompanyController::class, "welcome_view"])->name('welcome');
Route::get('/all_categories', [CategoryController::class, "all_categories"])->name('all_categories');
Route::get('/produits', [ProductController::class, "index"])->name('all_pro');

Route::prefix("category")->group(function () {

    Route::get('/{id}', [CategoryController::class, 'show_category'])->name('show_category');
});



Route::prefix("admin")->middleware('auth')->group(function () {


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/categories_page', [CategoryController::class, 'categories_page'])->name('categories_page');
    Route::post('/add_category', [CategoryController::class, 'create'])->name('add_category');
    Route::delete('/delete_category/{id}', [CategoryController::class, 'delete_category'])->name('delete_category');
    Route::get('/show_category_admin/{id}', [CategoryController::class, 'show_category_admin'])->name('show_category_admin');
    Route::put('/update_category/{id}', [CategoryController::class, 'update_category'])->name('update_category');

    
    
    Route::get('/add_product', [ProductController::class, 'add_product'])->name('add_product');


    


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});

require __DIR__ . '/auth.php';
