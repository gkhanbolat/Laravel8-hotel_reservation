<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
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
    return view('home.index');
});
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/aboutus',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references',[HomeController::class, 'references'])->name('references');
Route::get('/faq',[\App\Http\Controllers\CaregoryController::class, 'faq'])->name('faq');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage',[HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/hotel/{id}/{slug}',[\App\Http\Controllers\CaregoryController::class, 'hotel'])->name('hotel');
Route::get('/categoryhotel/{id}/{slug}',[\App\Http\Controllers\CaregoryController::class, 'categoryhotel'])->name('categoryhotel');
Route::get('/addtocart/{id}',[\App\Http\Controllers\CaregoryController::class,'addtocart'])->name('addtocart');
Route::post('/gethotel',[\App\Http\Controllers\CaregoryController::class,'gethotel'])->name('gethotel');
Route::get('/hotellist/{search}',[\App\Http\Controllers\CaregoryController::class,'hotellist'])->name('hotellist');


Route::get('/test/{id}',[HomeController::class, 'test']);

Route::get('/addtocart/{id}',[\App\Http\Controllers\CaregoryController::class,'addtocart'])->name('addtocart');


Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome')->middleware("auth");



Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/admin/login',[App\Http\Controllers\HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [App\Http\Controllers\HomeController::class, 'logincheck'])->name('admin_logincheck');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews',[\App\Http\Controllers\UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}',[\App\Http\Controllers\UserController::class, 'destroymyreview'])->name('user_review_delete');

});





Route::middleware('auth')->prefix('admin')->group(function (){
    Route::middleware('admin')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

    Route::prefix('hotel')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\HotelController::class, 'index'])->name('admin_hotels');
        Route::get('create',[\App\Http\Controllers\Admin\HotelController::class, 'create'])->name('admin_hotel_add');
        Route::post('store',[\App\Http\Controllers\Admin\HotelController::class, 'store'])->name('admin_hotel_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\HotelController::class, 'edit'])->name('admin_hotel_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\HotelController::class, 'update'])->name('admin_hotel_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\HotelController::class, 'destroy'])->name('admin_hotel_delete');
        Route::get('show',[\App\Http\Controllers\Admin\HotelController::class, 'show'])->name('admin_hotel_show');


    });

    Route::prefix('image')->group(function (){
        Route::get('create/{hotel_id}',[\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{hotel_id}',[\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{hotel_id}',[\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');


    });

    Route::prefix('messages')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show',[\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');


    });

    Route::prefix('review')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
        Route::get('show/{id}',[\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');

    });

    Route::prefix('faq')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('create',[\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('store',[\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('show',[\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');


    });

    Route::prefix('room')->group(function (){
        Route::get('/{hotel_id}',[\App\Http\Controllers\Admin\RoomController::class, 'index'])->name('admin_rooms');
        Route::get('create/{hotel_id}',[\App\Http\Controllers\Admin\RoomController::class, 'create'])->name('admin_room_add');
        Route::post('store/{hotel_id}',[\App\Http\Controllers\Admin\RoomController::class, 'store'])->name('admin_room_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\RoomController::class, 'edit'])->name('admin_room_edit');
        Route::post('update/{id}/{hotel_id}',[\App\Http\Controllers\Admin\RoomController::class, 'update'])->name('admin_room_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\RoomController::class, 'destroy'])->name('admin_room_delete');
        Route::get('show',[\App\Http\Controllers\Admin\RoomController::class, 'show'])->name('admin_room_show');


    });

    Route::prefix('reservation')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('admin_reservation');
        Route::post('create',[\App\Http\Controllers\Admin\ReservationController::class, 'create'])->name('admin_reservation_add');
        Route::post('store/{hotel_id}/{room_id}',[\App\Http\Controllers\Admin\ReservationController::class, 'store'])->name('admin_reservation_add');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\ReservationController::class, 'edit'])->name('admin_reservation_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ReservationController::class, 'update'])->name('admin_reservation_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ReservationController::class, 'destroy'])->name('admin_reservation_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ReservationController::class, 'show'])->name('admin_reservation_show');



    });

        Route::prefix('user')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::post('create',[\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store',[\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_add');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}',[\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}',[\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}',[\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}',[\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');



        });


    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

    });
});

Route::middleware('auth')->prefix('user')->group(function () {
    Route::prefix('reservation')->group(function (){
        Route::get('/',[\App\Http\Controllers\ReservationController::class, 'index'])->name('myrezervations');
        Route::post('create/{id}',[\App\Http\Controllers\ReservationController::class, 'create'])->name('user_reservation_add');
        Route::post('store/{hotel_id}/{room_id}',[\App\Http\Controllers\ReservationController::class, 'store'])->name('user_reservation_store');
        Route::get('edit/{id}',[\App\Http\Controllers\ReservationController::class, 'edit'])->name('user_reservation_edit');
        Route::post('update/{id}',[\App\Http\Controllers\ReservationController::class, 'update'])->name('user_reservation_update');
        Route::get('delete/{id}',[\App\Http\Controllers\ReservationController::class, 'destroy'])->name('user_reservation_delete');
        Route::get('show',[\App\Http\Controllers\ReservationController::class, 'show'])->name('user_reservation_show');


    });

});
