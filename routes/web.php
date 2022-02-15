<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\AboutUsController;
use App\Http\Controllers\Dashboard\AreaController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\LocationController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\InboxController;
use App\Http\Controllers\Dashboard\TeamController;
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


Route::get('/',function (){return redirect()->route('admin');})->name('front.home');





Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [HomeController::class, 'index'])->name('admin');


//services
Route::group(['prefix' => 'services','middleware'=>'auth'],function () {
    Route::get('/', [ServiceController::class, 'index'])->name('services');
    Route::get('create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('store', [ServiceController::class, 'store'])->name('services.store');
    Route::get('edit/{id}', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('update/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('delete/{id}', [ServiceController::class, 'delete'])->name('services.delete');
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
//areas
Route::group(['prefix' => 'areas','middleware'=>'auth'],function () {
    Route::get('/', [AreaController::class, 'index'])->name('areas');
    Route::get('create', [AreaController::class, 'create'])->name('areas.create');
    Route::post('store', [AreaController::class, 'store'])->name('areas.store');
    Route::get('edit/{id}', [AreaController::class, 'edit'])->name('areas.edit');
    Route::post('update/{id}', [AreaController::class, 'update'])->name('areas.update');
    Route::get('delete/{id}', [AreaController::class, 'delete'])->name('areas.delete');
});

//locations
Route::group(['prefix' => 'locations','middleware'=>'auth'],function () {
    Route::get('/', [LocationController::class, 'index'])->name('locations');
    Route::get('create', [LocationController::class, 'create'])->name('locations.create');
    Route::post('store', [LocationController::class, 'store'])->name('locations.store');
    Route::get('edit/{id}', [LocationController::class, 'edit'])->name('locations.edit');
    Route::post('update/{id}', [LocationController::class, 'update'])->name('locations.update');
    Route::get('delete/{id}', [LocationController::class, 'delete'])->name('locations.delete');
});


//locations
Route::group(['prefix' => 'teams','middleware'=>'auth'],function () {
    Route::get('/', [TeamController::class, 'index'])->name('teams');
    Route::get('create', [TeamController::class, 'create'])->name('teams.create');
    Route::post('store', [TeamController::class, 'store'])->name('teams.store');
    Route::get('edit/{id}', [TeamController::class, 'edit'])->name('teams.edit');
    Route::post('update/{id}', [TeamController::class, 'update'])->name('teams.update');
    Route::get('delete/{id}', [TeamController::class, 'delete'])->name('teams.delete');
});

//sliders
Route::group(['prefix' => 'sliders','middleware'=>'auth'],function () {
    Route::get('/', [SliderController::class, 'index'])->name('sliders');
    Route::get('create', [SliderController::class, 'create'])->name('sliders.create');
    Route::post('store', [SliderController::class, 'store'])->name('sliders.store');
    Route::get('edit/{id}', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::post('update/{id}', [SliderController::class, 'update'])->name('sliders.update');
    Route::get('delete/{id}', [SliderController::class, 'delete'])->name('sliders.delete');
});
//about us
Route::group(['prefix' => 'aboutUs','middleware'=>'auth'],function () {
    Route::get('edit/{id}', [AboutUsController::class, 'edit'])->name('about.edit');
    Route::post('update/{id}', [AboutUsController::class, 'update'])->name('about.update');
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

