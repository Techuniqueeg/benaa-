<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\TripController;
use App\Http\Controllers\Dashboard\InboxController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('cache', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return 'success';
});


Route::get('/',function (){return 'web';})->name('front.home');





Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [HomeController::class, 'index'])->name('admin');


//categories
Route::group(['prefix' => 'categories','middleware'=>'auth:web'],function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories');
    Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('update/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
});

//Trips
Route::group(['prefix' => 'trips','middleware'=>'auth'],function () {
    Route::get('/', [TripController::class, 'index'])->name('trips');
    Route::get('create', [TripController::class, 'create'])->name('trips.create');
    Route::get('generate_days/{count}/{trip_id}', [TripController::class, 'generate_days'])->name('trips.generate_days');
    Route::post('store', [TripController::class, 'store'])->name('trips.store');
    Route::get('edit/{id}', [TripController::class, 'edit'])->name('trips.edit');
    Route::post('update/{id}', [TripController::class, 'update'])->name('trips.update');
    Route::get('delete/{id}', [TripController::class, 'delete'])->name('trips.delete');
    Route::get('delete/image/{id}', [TripController::class, 'deleteTripImage'])->name('image.delete');
    Route::post('upload_images', [TripController::class, 'upload_images'])->name('trips.upload_images');
});
//Blogs
Route::group(['prefix' => 'blogs','middleware'=>'auth'],function () {
    Route::get('/', [BlogController::class, 'index'])->name('blogs');
    Route::get('create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('store', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::post('update/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::get('delete/{id}', [BlogController::class, 'delete'])->name('blogs.delete');
});
//settings
Route::group(['prefix' => 'settings'],function () {
    Route::get('/', [SettingController::class, 'index'])->name('settings');
    Route::post('/update', [SettingController::class, 'update'])->name('settings.update');
});
//inboxs
Route::group(['prefix' => 'inboxes','middleware'=>'auth'],function () {
    Route::get('/', [InboxController::class, 'index'])->name('inboxes');
    Route::get('/{id}', [InboxController::class, 'show'])->name('inboxes.show');
});

