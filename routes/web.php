<?php

use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('home.index');
});
Route::resource('catalog', CatalogController::class);
Route::resource('home', HomeController::class);
Route::resource('admin', AdminViewController::class);
Route::resource('admin/category', CategoryController::class);
