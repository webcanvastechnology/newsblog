<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/admin-dashboard', [AdminController::class, 'admin_dashboard']);

Route::get('/add-category', [AdminController::class, 'add_category']);
Route::post('/save-category', [AdminController::class, 'save_category'])->name('savecategory');

Route::get('/manage-category', [AdminController::class, 'manage_category']);
Route::get('/manage-blog', [AdminController::class, 'manage_blog']);

Route::get('/add-blog', [AdminController::class, 'add_blog']);
Route::post('/save-blog', [AdminController::class, 'save_blog'])->name('saveblog');

Route::get('/admin-adminblog', [AdminController::class, 'admin_adminblog']);
Route::get('/login', [AdminController::class, 'login']);


Route::get('/', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);

Route::get('/all-category', [FrontendController::class, 'all_category']);

Route::get('/contact', [FrontendController::class, 'contact']);