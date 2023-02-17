<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\CmsController;


// use App\Http\Controllers\Test;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\UserController;


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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('my-cart', [CartController::class, 'my_cart'])->name('mycart');

Route::get('signup', [UserAuthController::class, 'register'])->name('signup.index');
Route::get('login', [UserAuthController::class, 'login'])->name('login.index');
Route::get('forgot-password', [UserAuthController::class, 'forgot_password'])->name('forgot_password.index');


Route::get('terms', [CmsController::class, 'terms'])->name('terms.index');
Route::get('privacy-policy', [CmsController::class, 'privacy_policy'])->name('privacy_policy.index');
Route::get('faqs', [CmsController::class, 'faqs'])->name('faqs.index');


Route::get('logout', [Test::class, 'logout']);
Route::get('dashboard', [Test::class, 'dashboard']);
Route::group(array('prefix' => 'admin'), function() {
	Route::group(array('middleware' => 'App\Http\Middleware\GuestAdmin', 'namespace' => 'admin'), function () {
        Route::get('/', [AdminLoginController::class, 'login']);
        Route::post('loginAuth', [AdminLoginController::class, 'loginAuth'])->name('/loginAuth');
        Route::get('fogetPassword', [AdminLoginController::class, 'fogetPassword']);
        Route::post('sendPassword', [AdminLoginController::class, 'sendPassword'])->name('/sendPassword');
        Route::get('resetPassword/{string}', [AdminLoginController::class, 'resetPassword']);
		Route::post('saveResetPassword', [AdminLoginController::class,'resetPasswordSave'])->name('/saveResetPassword');

    });

	Route::group(array('middleware' => ['App\Http\Middleware\AuthAdmin'], 'namespace' => 'admin'), function () {
        Route::get('dashboard', [AdminDashboardController::class, 'dashboard']);
        Route::get('changePassword', [AdminDashboardController::class, 'changePassword']);
        Route::post('saveChangePassword', [AdminDashboardController::class, 'saveChangePassword']);
		Route::get('logout', [AdminLoginController::class, 'logout']);
		Route::get('email_template', [EmailTemplateController::class, 'index']);
		Route::get('email_template_add', [EmailTemplateController::class, 'add'])->name('/email_template_add');
		Route::post('email_template_save', [EmailTemplateController::class, 'save'])->name('/email_template_save');
		Route::get('email_template_edit/{id}', [EmailTemplateController::class, 'edit'])->name('/email_template_edit');
		Route::post('email_template_update', [EmailTemplateController::class, 'update'])->name('/email_template_update');
		Route::post('getConstant', [EmailTemplateController::class, 'getConstant'])->name('/getConstant');
		Route::get('email_template_delete/{id}', [EmailTemplateController::class, 'delete'])->name('/email_template_delete');
		Route::get('users', [UserController::class, 'index']);
		Route::get('add_users', [UserController::class, 'add'])->name('/add_users');
		Route::post('save_users', [UserController::class, 'save'])->name('/save_users');




    });
});
