<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, "index"]);
Route::get('/product', [App\Http\Controllers\Frontend\ProductController::class, "index"]);
Route::get('/product-details', [App\Http\Controllers\Frontend\ProdetailsController::class, "index"]);
Route::get('/check-out', [App\Http\Controllers\Frontend\CheckoutController::class, "index"]);
Route::get('/cart', [App\Http\Controllers\Frontend\CartController::class, "index"]);
Route::get('/member-login', [App\Http\Controllers\Frontend\MemberController::class, "viewlogin"]);
Route::post('/member-login', [App\Http\Controllers\Frontend\MemberController::class, "login"]);
Route::get('/member-register', [App\Http\Controllers\Frontend\MemberController::class, "register"]);
Route::post('/member-register', [App\Http\Controllers\Frontend\MemberController::class, "store"]);
Route::get('/bloglist', [App\Http\Controllers\Frontend\BlogController::class, "show"]);
Route::get('/blog/detail/{id}', [App\Http\Controllers\Frontend\BlogController::class, "detail"]);
Route::post('/blog/detail/{id}', [App\Http\Controllers\Frontend\BlogController::class, "rate"]);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/profile', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user');
Route::get('/admin/profile',[App\Http\Controllers\Admin\UserController::class, 'edit']);
Route::post('/admin/profile', [App\Http\Controllers\Admin\UserController::class, 'update']);

Route::get('/admin/country', [App\Http\Controllers\Admin\CountryController::class, 'index'])->name('country');
Route::get('/country/add', [App\Http\Controllers\Admin\CountryController::class, 'add'])->name('add');
Route::post('/country/add', [App\Http\Controllers\Admin\CountryController::class, "save"]);
Route::get('country/edit/{id}', [App\Http\Controllers\Admin\CountryController::class, "edit"]);
Route::post('country/edit/{id}', [App\Http\Controllers\Admin\CountryController::class, "update"]);
Route::get('/country/delete/{id}', [App\Http\Controllers\Admin\CountryController::class, "delete"]);



Route::get('/admin/blog', [App\Http\Controllers\Admin\BlogController::class, 'index']);
Route::get('/blog/add', [App\Http\Controllers\Admin\BlogController::class, 'add'])->name('add');
Route::post('/blog/add', [App\Http\Controllers\Admin\BlogController::class, "save"]);
Route::get('blog/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, "edit"]);
Route::post('blog/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, "update"]);
Route::get('/blog/delete/{id}', [App\Http\Controllers\Admin\BlogController::class, "delete"]);



