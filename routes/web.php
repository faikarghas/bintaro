<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;

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


Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/360-living',[AboutController::class,'living'])->name('living');

Route::get('/experiences',[ExperiencesController::class,'index'])->name('experiences');
Route::get('/experiences/{slug}',[ExperiencesController::class,'detail'])->name('experiences.slug');

Route::get('/partners',[PartnerController::class,'index'])->name('partners');

Route::get('/products',[ProductController::class,'index'])->name('products');
Route::get('/products/{category}',[ProductController::class,'category'])->name('category.data');
Route::get('/products/{category}/{slug}',[ProductController::class,'detail'])->name('category.data.slug');

Route::get('/news',[NewsController::class,'index'])->name('news');
Route::get('/news/{slug}',[NewsController::class,'detail'])->name('news.data');
Route::get('/contact-us',[ContactController::class,'index'])->name('contact');
Route::post('/post-contact',[ContactController::class,'postContact']);

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/clear-view-cache', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache has jut been removed';
});

