<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\CartController;


// use App\Http\Controllers\Test;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\UserController;


use App\Http\Controllers\Teacher\DashboardController;
use App\Http\Controllers\Teacher\CourseController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Teacher\ProfileController;

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
Route::group(array('middleware' => 'App\Http\Middleware\StudentNotIn'), function () {
	Route::get('my-learning', [HomeController::class, 'my_learning'])->name('mylearning.index');
	Route::get('logout', [AuthController::class, 'logout']);

});
Route::get('shopping-cart', [HomeController::class, 'shopping_cart'])->name('shopping_cart.index');
Route::get('profile', [HomeController::class, 'account'])->name('account.index');
Route::get('messages', [HomeController::class, 'messages'])->name('messages.index');
Route::get('purchase-history', [HomeController::class, 'purchase_history'])->name('purchase_history.index');
Route::get('my-redemption-coupons', [HomeController::class, 'my_redemption_coupons'])->name('my_redemption_coupons.index');
Route::get('refer-and-earn', [HomeController::class, 'refer_and_earn'])->name('refer_and_earn.index');
Route::get('course-play', [HomeController::class, 'course_play'])->name('course_play.index');
Route::get('courses', [HomeController::class, 'course'])->name('course.index');
Route::get('courses-detail', [HomeController::class, 'courses_detail'])->name('courses_detail.index');
Route::get('teacher-detail', [HomeController::class, 'teacher_detail'])->name('teacher_detail.index');


Route::group(array('middleware' => 'App\Http\Middleware\StudentIn'), function () {
	Route::get('signup', [AuthController::class, 'register'])->name('signup.index');
	Route::get('login', [AuthController::class, 'login'])->name('login.index');
	Route::post('auth', [AuthController::class, 'auth']);
	Route::get('forgot-password', [AuthController::class, 'forgot_password'])->name('forgot_password.index');
	Route::post('userRegister', [AuthController::class, 'userRegister']);
	Route::get('activate/{id}', [AuthController::class, 'activate']);
	Route::post('sendResetLink', [AdminLoginController::class, 'sendResetLink'])->name('/sendResetLink');

});


Route::get('terms', [CmsController::class, 'terms'])->name('terms.index');
Route::get('privacy-policy', [CmsController::class, 'privacy_policy'])->name('privacy_policy.index');
Route::get('faqs', [CmsController::class, 'faqs'])->name('faqs.index');
Route::get('privacy-policy', [CmsController::class, 'privacy_policy'])->name('privacy_policy.index');
Route::get('faqs', [CmsController::class, 'faqs'])->name('faqs.index');
Route::get('about-us', [CmsController::class, 'about_us'])->name('about_us.index');

Route::group(array('prefix' => 'teacher'), function() {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('teacher.dashboard');


Route::get('/course/create', [CourseController::class, 'create']);
Route::post('/course/create', [CourseController::class, 'create']);
Route::get('/course/edit/{type}/{id}', [CourseController::class, 'edit']);
Route::post('/course/edit/{type}/{id}', [CourseController::class, 'edit']);

Route::post('/course/create/section/{course_id}', [CourseController::class, 'create_section']);
Route::post('/course/create/lecture/{section_id}', [CourseController::class, 'create_lecture']);

Route::get('profile', [ProfileController::class, 'index'])->name('teacher_profile.index');
Route::get('profile/edit', [ProfileController::class, 'edit'])->name('teacher_profile.edit');

Route::get('payment', [TeacherController::class, 'payment'])->name('teacher_payment.index');
Route::get('students', [TeacherController::class, 'students'])->name('teacher_students.index');
Route::get('revenue-report', [TeacherController::class, 'revenue_report'])->name('revenue_report.index');
Route::get('messages', [TeacherController::class, 'messages'])->name('teacher_messages.index');
Route::get('reviews', [TeacherController::class, 'reviews'])->name('teacher_reviews.index');



});





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
