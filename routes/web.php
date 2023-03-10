<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;


// use App\Http\Controllers\Test;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\VideoController;

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


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/add/{course_id}', [CartController::class, 'add']);
Route::get('/cart/remove/{course_id}', [CartController::class, 'remove']);


Route::group(array('middleware' => 'App\Http\Middleware\StudentNotIn'), function () {
	Route::get('my-learning', [StudentCourseController::class, 'my_learning'])->name('mylearning.index');
	Route::get('course-play/{course_id}', [StudentCourseController::class, 'course_play'])->name('course_play.index');
	Route::post('start_lecture', [StudentCourseController::class, 'start_lecture']);
	Route::get('delete_lecture/{id}', [StudentCourseController::class, 'delete_lecture']);
	Route::get('delete_section/{id}', [StudentCourseController::class, 'delete_section']);
	Route::get('logout', [AuthController::class, 'logout']);
});

Route::get('shopping-cart', [HomeController::class, 'shopping_cart'])->name('shopping_cart.index');
Route::get('edit_profile', [HomeController::class, 'edit_profile'])->name('account.index');
Route::post('edit_profile', [HomeController::class, 'edit_profile']);
Route::get('messages', [HomeController::class, 'messages'])->name('messages.index');
Route::get('purchase-history', [HomeController::class, 'purchase_history'])->name('purchase_history.index');
Route::get('my-redemption-coupons', [HomeController::class, 'my_redemption_coupons'])->name('my_redemption_coupons.index');
Route::get('refer-and-earn', [HomeController::class, 'refer_and_earn'])->name('refer_and_earn.index');
Route::get('courses', [StudentCourseController::class, 'course'])->name('course.index');
Route::get('courses-detail/{id}', [StudentCourseController::class, 'courses_detail'])->name('courses_detail.index');
Route::get('teacher-detail', [HomeController::class, 'teacher_detail'])->name('teacher_detail.index');


Route::group(array('middleware' => 'App\Http\Middleware\StudentIn'), function () {
	Route::get('signup', [AuthController::class, 'register'])->name('signup.index');
	Route::get('login', [AuthController::class, 'login'])->name('login.index');
	Route::post('auth', [AuthController::class, 'auth']);
	Route::get('forgot-password', [AuthController::class, 'forgot_password'])->name('forgot_password.index');
	Route::post('userRegister', [AuthController::class, 'userRegister']);
	Route::get('activate/{id}', [AuthController::class, 'activate']);
	Route::post('sendResetLink', [AuthController::class, 'sendResetLink'])->name('/sendResetLink');
	Route::get('resetPassword/{string}', [AuthController::class, 'resetPassword']);
	Route::post('newPassword', [AuthController::class, 'newPassword']);
});


Route::get('terms', [HomeController::class, 'terms'])->name('terms.index');
Route::get('privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy_policy.index');
Route::get('faqs', [HomeController::class, 'faqs'])->name('faqs.index');
Route::get('privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy_policy.index');
Route::get('faqs', [HomeController::class, 'faqs'])->name('faqs.index');
Route::get('about-us', [HomeController::class, 'about_us'])->name('about_us.index');

Route::group(array('middleware' => 'App\Http\Middleware\StudentNotIn','prefix' => 'teacher'), function() {

Route::get('/become_teacher', [DashboardController::class, 'become_teacher']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('teacher.dashboard');


Route::get('/course/create', [CourseController::class, 'create']);
Route::post('/course/create', [CourseController::class, 'create']);
Route::get('/course/edit/{type}/{id}', [CourseController::class, 'edit']);
Route::post('/course/edit/{type}/{id}', [CourseController::class, 'edit']);

Route::post('/course/update/price/{id}', [CourseController::class, 'update_course_price']);
Route::post('/course/create/section/{course_id}', [CourseController::class, 'create_section']);
Route::post('/course/create/lecture/{section_id}/{course_id}', [CourseController::class, 'create_lecture']);

Route::get('profile', [ProfileController::class, 'index'])->name('teacher_profile.index');
Route::get('profile/edit', [ProfileController::class, 'edit'])->name('teacher_profile.edit');

Route::get('delete_extra_field/{type}/{id}', [CourseController::class, 'delete_extra_field']);


Route::get('payment', [TeacherController::class, 'payment'])->name('teacher_payment.index');
Route::get('students', [TeacherController::class, 'students'])->name('teacher_students.index');
Route::get('revenue-report', [TeacherController::class, 'revenue_report'])->name('revenue_report.index');
Route::get('messages', [TeacherController::class, 'messages'])->name('teacher_messages.index');
Route::get('reviews', [TeacherController::class, 'reviews'])->name('teacher_reviews.index');



});





Route::group(array('prefix' => 'admin'), function() {
	Route::group(array('middleware' => 'App\Http\Middleware\GuestAdmin', 'namespace' => 'admin'), function () {
        Route::get('/login', [AdminLoginController::class, 'login']);
        Route::post('loginAuth', [AdminLoginController::class, 'loginAuth'])->name('/loginAuth');
        Route::get('fogetPassword', [AdminLoginController::class, 'fogetPassword']);
        Route::post('sendPassword', [AdminLoginController::class, 'sendPassword'])->name('/sendPassword');
        Route::get('resetPassword/{string}', [AdminLoginController::class, 'resetPassword']);
		Route::post('saveResetPassword', [AdminLoginController::class,'resetPasswordSave'])->name('/saveResetPassword');

    });

	Route::group(array('middleware' => ['App\Http\Middleware\AuthAdmin'], 'namespace' => 'admin'), function () {
        Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('/admin_dashboard');
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
		Route::get('delete_user/{id}', [UserController::class, 'delete']);
		Route::get('edit_user/{id}', [UserController::class, 'edit']);
		Route::post('update_user/{id}', [UserController::class, 'update'])->name('/update_user');;

        Route::get('cms-manager', [CmsController::class, 'index'])->name('cms-manager');
        Route::get('cms-manager/edit-cms/{id}', [CmsController::class, 'edit'])->name('edit_cms_page');
        Route::post('cms-manager/update-cms/{id}', [CmsController::class, 'update'])->name('update_cms_page');
		Route::get('cms-manager/edit-about-us-cms/{id}', [CmsController::class, 'edit_about_us'])->name('edit_about_us_page');
        Route::post('cms-manager/update-about-us-cms/{id}', [CmsController::class, 'update_about_us'])->name('update_about_us_page');

		Route::get('testimonials', [TestimonialController::class, 'index']);
		Route::get('testimonials/create', [TestimonialController::class, 'add'])->name('add_testimonial');
		Route::post('testimonials/save', [TestimonialController::class, 'save'])->name('save_testimonial');
		Route::get('testimonials/edit/{id}', [TestimonialController::class, 'edit'])->name('edit_testimonial');
		Route::post('testimonials/update/{id}', [TestimonialController::class, 'update'])->name('update_testimonial');
		Route::get('testimonials/delete/{id}', [TestimonialController::class, 'delete'])->name('delete_testimonial');


		Route::get('slider/index', [SliderController::class, 'index']);
		Route::get('slider/create', [SliderController::class, 'add'])->name('add_slider');
		Route::post('slider/save', [SliderController::class, 'save'])->name('save_slider');
		Route::get('slider/edit/{id}', [SliderController::class, 'edit'])->name('edit_slider');
		Route::post('slider/update/{id}', [SliderController::class, 'update'])->name('update_slider');
		Route::get('slider/delete/{id}', [SliderController::class, 'delete'])->name('delete_slider');

		

		Route::get('video/index', [VideoController::class, 'index']);

		Route::get('video/approve/{id}', [VideoController::class, 'approve'])->name('approve_video');
		Route::get('video/reject/{id}', [VideoController::class, 'reject'])->name('reject_video');


    });
});
