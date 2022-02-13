<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\DayController;
use App\Http\Controllers\Dashboard\HomeContentController;
use App\Http\Controllers\Dashboard\HomeSliderController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\WorkController;
use App\Http\Controllers\Dashboard\TripController;
use App\Http\Controllers\Dashboard\InboxController;
use App\Http\Controllers\Front\HomeFrontController;
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


// cities Route
Route::group(['prefix' => 'city','middleware'=>'auth'],function () {
    Route::get('/', [CityController::class, 'index'])->name('cities');
    Route::get('create', [CityController::class, 'create'])->name('cities.create');
    Route::post('store', [CityController::class, 'store'])->name('cities.store');
    Route::get('edit/{id}', [CityController::class, 'edit'])->name('cities.edit');
    Route::post('update/{id}', [CityController::class, 'update'])->name('cities.update');
    Route::get('delete/{id}', [CityController::class, 'delete'])->name('cities.delete');
    Route::post('deletes', [CityController::class, 'deletes'])->name('cities.deletes');
});

//works
Route::group(['prefix' => 'works','middleware'=>'auth'],function () {
    Route::get('/', [WorkController::class, 'index'])->name('works');
    Route::get('create', [WorkController::class, 'create'])->name('works.create');
    Route::post('store', [WorkController::class, 'store'])->name('works.store');
    Route::get('edit/{id}', [WorkController::class, 'edit'])->name('works.edit');
    Route::post('update/{id}', [WorkController::class, 'update'])->name('works.update');
    Route::get('delete/{id}', [WorkController::class, 'delete'])->name('works.delete');
});
//Contents
Route::group(['prefix' => 'contents','middleware'=>'auth'],function () {
    Route::get('/', [HomeContentController::class, 'index'])->name('contents');
    Route::get('create', [HomeContentController::class, 'create'])->name('contents.create');
    Route::post('store', [HomeContentController::class, 'store'])->name('contents.store');
    Route::get('edit/{id}', [HomeContentController::class, 'edit'])->name('contents.edit');
    Route::post('update/{id}', [HomeContentController::class, 'update'])->name('contents.update');
    Route::get('delete/{id}', [HomeContentController::class, 'delete'])->name('contents.delete');
});

//sliders
Route::group(['prefix' => 'sliders','middleware'=>'auth'],function () {
    Route::get('/', [HomeSliderController::class, 'index'])->name('sliders');
    Route::get('create', [HomeSliderController::class, 'create'])->name('sliders.create');
    Route::post('store', [HomeSliderController::class, 'store'])->name('sliders.store');
    Route::get('edit/{id}', [HomeSliderController::class, 'edit'])->name('sliders.edit');
    Route::post('update/{id}', [HomeSliderController::class, 'update'])->name('sliders.update');
    Route::get('delete/{id}', [HomeSliderController::class, 'delete'])->name('sliders.delete');
});

//categories
Route::group(['prefix' => 'categories','middleware'=>'auth'],function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories');
    Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('update/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
});

//days
Route::group(['prefix' => 'days','middleware'=>'auth'],function () {
    Route::get('/', [DayController::class, 'index'])->name('days');
    Route::get('create', [DayController::class, 'create'])->name('days.create');
    Route::post('store', [DayController::class, 'store'])->name('days.store');
    Route::get('edit/{id}', [DayController::class, 'edit'])->name('days.edit');
    Route::post('update/{id}', [DayController::class, 'update'])->name('days.update');
    Route::get('delete/{id}', [DayController::class, 'delete'])->name('days.delete');
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
Route::group(['prefix' => 'settings','middleware'=>'auth'],function () {
    Route::get('/', [SettingController::class, 'index'])->name('settings');
    Route::post('/update', [SettingController::class, 'update'])->name('settings.update');
});
//inboxs
Route::group(['prefix' => 'inboxes','middleware'=>'auth'],function () {
    Route::get('/', [InboxController::class, 'index'])->name('inboxes');
    Route::get('/{id}', [InboxController::class, 'show'])->name('inboxes.show');
});
//inboxs
Route::group(['prefix' => 'ads','middleware'=>'auth'],function () {
    Route::get('/', [AdController::class, 'index'])->name('ads');
    Route::get('create', [AdController::class, 'create'])->name('ads.create');
    Route::post('store', [AdController::class, 'store'])->name('ads.store');
    Route::get('edit/{id}', [AdController::class, 'edit'])->name('ads.edit');
    Route::post('update/{id}', [AdController::class, 'update'])->name('ads.update');
    Route::get('delete/{id}', [AdController::class, 'delete'])->name('ads.delete');
});
