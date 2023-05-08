<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminVideoController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeAdertisementController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SidebarAdvertisementController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\TopAdvertisementController;
use App\Http\Controllers\Admin\PhotoGalleryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PhotoController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\SubCategoryController as FrontendSubCategoryController;
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
//     return view('frontend.frontend_master');
// });

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmail', [ContactController::class, 'sendmail'])->name('sendmail');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/News/{id}', [PostController::class, 'post_detail'])->name('post_detail');
Route::get('/sub-category-news/{id}', [FrontendSubCategoryController::class, 'sub_category_news'])->name('sub_category_news');
Route::get('/all-News', [FrontendSubCategoryController::class, 'all_post'])->name('all_posts');
Route::get('/Photo-Gallery', [PhotoController::class, 'index'])->name('photo_gallery');
Route::get('/Video-Gallery', [PhotoController::class, 'video'])->name('video_gallery');


// Admin*

Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])->name('admin_dashboard')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::get('/admin/forgotpassword', [AdminLoginController::class, 'forgotpassword'])->name('forgot_password');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::post('/admin/forgot-password-submit', [AdminLoginController::class, 'forgot_password_submit'])->name('forgot_password_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('reset_password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('reset_password_submit');

Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_edit_profile')->middleware('admin:admin');
Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit')->middleware('admin:admin');


// Admin Advertisement 
Route::get('/admin/home-advertisement-show', [HomeAdertisementController::class, 'home_ad_show'])->name('admin_home_advertisement')->middleware('admin:admin');
Route::post('/admin/home-advertisement-submit', [HomeAdertisementController::class, 'home_advertisement_submit'])->name('home_advertisement_submit')->middleware('admin:admin');

Route::get('/admin/top-advertisement-show', [TopAdvertisementController::class, 'top_ad_show'])->name('admin_top_advertisement')->middleware('admin:admin');
Route::post('/admin/top-advertisement-submit', [TopAdvertisementController::class, 'top_advertisement_submit'])->name('top_advertisement_submit')->middleware('admin:admin');

Route::get('/admin/sidebar-advertisement-show', [SidebarAdvertisementController::class, 'sidebar_ad_show'])->name('admin_sidebar_advertisement')->middleware('admin:admin');
Route::get('/admin/sidebar-advertisement-create', [SidebarAdvertisementController::class, 'sidebar_ad_create'])->name('admin_sidebar_advertisement_create')->middleware('admin:admin');
Route::post('/admin/sidebar-advertisement-submit', [SidebarAdvertisementController::class, 'sidebar_advertisement_submit'])->name('sidebar_advertisement_submit')->middleware('admin:admin');
Route::get('/admin/sidebar-advertisement-edit/{id}', [SidebarAdvertisementController::class, 'sidebar_ad_edit'])->name('admin_sidebar_advertisement_edit')->middleware('admin:admin');
Route::post('/admin/sidebar-advertisement-update/{id}', [SidebarAdvertisementController::class, 'sidebar_advertisement_update'])->name('sidebar_advertisement_update')->middleware('admin:admin');
Route::get('/admin/sidebar-advertisement-delete/{id}', [SidebarAdvertisementController::class, 'sidebar_ad_delete'])->name('admin_sidebar_advertisement_delete')->middleware('admin:admin');



Route::get('/admin/category-show', [CategoryController::class, 'catergory_show'])->name('admin_catergory_show')->middleware('admin:admin');
Route::get('/admin/category-create', [CategoryController::class, 'category_create'])->name('admin_catergory_create')->middleware('admin:admin');
Route::post('/admin/category-submit', [CategoryController::class, 'category_submit'])->name('category_submit')->middleware('admin:admin');
Route::get('/admin/category-edit/{id}', [CategoryController::class, 'category_edit'])->name('category_edit')->middleware('admin:admin');
Route::get('/admin/category-edit/{id}', [CategoryController::class, 'category_edit'])->name('category_edit')->middleware('admin:admin');
Route::post('/admin/category-update/{id}', [CategoryController::class, 'category_update'])->name('category_update')->middleware('admin:admin');
Route::get('/admin/category-delete/{id}', [CategoryController::class, 'category_delete'])->name('category_delete')->middleware('admin:admin');


Route::get('/admin/sub-category-show', [SubcategoryController::class, 'sub_catergory_show'])->name('admin_sub_catergory_show')->middleware('admin:admin');
Route::get('/admin/sub-category-create', [SubcategoryController::class, 'sub_category_create'])->name('admin_sub_catergory_create')->middleware('admin:admin');
Route::post('/admin/sub-category-submit', [SubcategoryController::class, 'sub_category_submit'])->name('sub_category_submit')->middleware('admin:admin');
Route::get('/admin/sub-category-edit/{id}', [SubcategoryController::class, 'sub_category_edit'])->name('sub_category_edit')->middleware('admin:admin');
Route::get('/admin/sub-category-edit/{id}', [SubcategoryController::class, 'sub_category_edit'])->name('sub_category_edit')->middleware('admin:admin');
Route::post('/admin/sub-category-update/{id}', [SubcategoryController::class, 'sub_category_update'])->name('sub_category_update')->middleware('admin:admin');
Route::get('/admin/sub-category-delete/{id}', [SubcategoryController::class, 'sub_category_delete'])->name('sub_category_delete')->middleware('admin:admin');

Route::get('/admin/post-show', [AdminPostController::class, 'post_show'])->name('admin_post_show')->middleware('admin:admin');
Route::get('/admin/post-create', [AdminPostController::class, 'post_create'])->name('admin_post_create')->middleware('admin:admin');
Route::post('/admin/post-submit', [AdminPostController::class, 'post_submit'])->name('post_submit')->middleware('admin:admin');
Route::get('/admin/post-edit/{id}', [AdminPostController::class, 'post_edit'])->name('post_edit')->middleware('admin:admin');
Route::post('/admin/post-update/{id}', [AdminPostController::class, 'post_update'])->name('post_update')->middleware('admin:admin');
Route::get('/admin/post-delete/{id}', [AdminPostController::class, 'post_delete'])->name('post_delete')->middleware('admin:admin');
Route::get('/admin/post-delete-tag/{id}/{id1}', [AdminPostController::class, 'post_delete_tag'])->name('post_delete-tag')->middleware('admin:admin');

Route::get('/admin/settings-show', [SettingController::class, 'setting_show'])->name('admin_setting')->middleware('admin:admin');
Route::post('/admin/setting-update', [SettingController::class, 'setting_update'])->name('setting_update')->middleware('admin:admin');

Route::get('/admin/photo-show', [PhotoGalleryController::class, 'photo_show'])->name('admin_photo')->middleware('admin:admin');
Route::get('/admin/photo-create', [PhotoGalleryController::class, 'photo_create'])->name('admin_photo_create')->middleware('admin:admin');
Route::post('/admin/photo-submit', [PhotoGalleryController::class, 'photo_submit'])->name('photo_submit')->middleware('admin:admin');
Route::get('/admin/photo-edit/{id}', [PhotoGalleryController::class, 'photo_edit'])->name('admin_photo_edit')->middleware('admin:admin');
Route::post('/admin/photo-update/{id}', [PhotoGalleryController::class, 'photo_update'])->name('photo_update')->middleware('admin:admin');
Route::get('/admin/photo-delete/{id}', [PhotoGalleryController::class, 'photo_delete'])->name('admin_photo_delete')->middleware('admin:admin');


Route::get('/admin/video-show', [AdminVideoController::class, 'video_show'])->name('admin_video')->middleware('admin:admin');
Route::get('/admin/video-create', [AdminVideoController::class, 'video_create'])->name('admin_video_create')->middleware('admin:admin');
Route::post('/admin/video-submit', [AdminVideoController::class, 'video_submit'])->name('video_submit')->middleware('admin:admin');
Route::get('/admin/video-edit/{id}', [AdminVideoController::class, 'video_edit'])->name('admin_video_edit')->middleware('admin:admin');
Route::post('/admin/video-update/{id}', [AdminVideoController::class, 'video_update'])->name('video_update')->middleware('admin:admin');
Route::get('/admin/video-delete/{id}', [AdminVideoController::class, 'video_delete'])->name('admin_video_delete')->middleware('admin:admin');

Route::get('/admin/pages-status', [AdminPagesController::class, 'status_view'])->name('status_view')->middleware('admin:admin');
Route::post('/admin/pages-status/{id}', [AdminPagesController::class, 'status_view_update'])->name('status_view_update')->middleware('admin:admin');


Route::get('/admin/contact-show', [AdminContactController::class, 'contact_show'])->name('contact_show')->middleware('admin:admin');
Route::post('/contact-show/update/{id}', [AdminContactController::class, 'contact_update'])->name('contact_update')->middleware('admin:admin');