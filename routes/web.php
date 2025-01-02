<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;




Route::get('/about_us' , [CompanyController::class , "index" ] )->name('about_us');
Route::get('/', [CompanyController::class, "welcome_view"])->name('welcome');
Route::get('/all_categories', [CategoryController::class, "all_categories"])->name('all_categories');
// Route::get('/all_categories', [CompanyController::class, "all_categories"])->name('all_categories');  

Route::prefix( "category" ) -> group( function() {


    Route::get('/{id}', [CategoryController::class, 'show_category']) -> name ('show_category') ;

}  )  ;
