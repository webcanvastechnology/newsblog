<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;

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


Route::get('/admin-dashboard', [SuperAdminController::class, 'admin_dashboard']);

Route::get('/add-category', [SuperAdminController::class, 'add_category']);
Route::post('/save-category', [SuperAdminController::class, 'save_category'])->name('savecategory');

Route::get('/edit-category/{id}', [SuperAdminController::class, 'edit_category']);

Route::get('/delete-category/{id}', [SuperAdminController::class, 'delete_category']);
Route::post('/update-category', [SuperAdminController::class, 'update_category'])->name('updatecategory');

Route::get('/manage-category', [SuperAdminController::class, 'manage_category']);



Route::get('/manage-blog', [SuperAdminController::class, 'manage_blog']);

Route::get('/add-blog', [SuperAdminController::class, 'add_blog']);
Route::post('/save-blog', [SuperAdminController::class, 'save_blog'])->name('saveblog');

Route::get('/edit-blog/{id}', [SuperAdminController::class, 'edit_blog']);
Route::get('/delete-blog/{id}', [SuperAdminController::class, 'delete_blog']);



Route::get('/login', [AdminController::class, 'login']);
Route::post('/login-check', [AdminController::class, 'login_check'])->name('logincheck');


Route::get('/', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/blog-details/{id}', [FrontendController::class, 'blog_details']);

Route::get('/all-category', [FrontendController::class, 'all_category']);

Route::get('/contact', [FrontendController::class, 'contact']);