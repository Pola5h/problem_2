<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\HomeController;



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
    return view('front.index');
})->name('a');

Route::get('/admin', function () {
    return view('admin.index');
})->name('d');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Dashbard', [App\Http\Controllers\HomeController::class, 'userhome'])->name('user.home');

Route::prefix('category')->group(function(){
    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('category.view');
    Route::get('/add', [CategoryController::class, 'CategoryAdd'])->name('category.add');
    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');
    Route::post ('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');

    
    });

    

    Route::prefix('product')->group(function(){
        Route::get('/view', [ProductController::class, 'ProductView'])->name('product.view');
        Route::get('/add', [ProductController::class, 'ProductAdd'])->name('product.add');
        Route::post('/store', [ProductController::class, 'ProductStore'])->name('product.store');
        Route::get('/edit/{id}', [ProductController::class, 'ProductEdit'])->name('product.edit');
    
        Route::post ('/update/{id}', [ProductController::class, 'ProductUpdate'])->name('product.update');
        Route::get('/delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');



        

           
    Route::get('/productvariantadd/{id}', [ProductController::class, 'ProductVariantAdd'])->name('productvariant.add');
    Route::post('/productvariantstore', [ProductController::class, 'ProductVariantStore'])->name('productvariant.store');
    Route::get('/productvariantdetails/{id}', [ProductController::class, 'ProductVariantDetails'])->name('productvariant.details');

    Route::get('/productvariantedit/{id}', [ProductController::class, 'ProductVariantEdit'])->name('productvariant.edit');
    Route::post('/productvariantupdate/{id}', [ProductController::class, 'ProductVariantUpdate'])->name('productvariant.update');

    Route::get('/productvariantdelete/{id}', [ProductController::class, 'ProductVariantDelete'])->name('productvariant.delete');

    });


    Route::get('/product-details{id}', [ProductController::class, 'ProductDetails'])->name('product.details');



