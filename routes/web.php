<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(FrontEndController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/jungle-safari', 'jungleSafari')->name('jungle.safari');
    Route::get('/canter-ride', 'canterRide')->name('canter.ride');
    Route::get('/resorts', 'resorts')->name('resorts');
    Route::get('/school-group', 'schoolGroup')->name('school.group');
    Route::get('/destination-wedding', 'destinationdWedding')->name('destination.wedding');
    Route::get('/coorporate-group', 'coorporateGroup')->name('coorporate.group');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy.policy');
    Route::get('/term-condition', 'termCondition')->name('term.condition');
});

// Authentication routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/custom-login', [LoginController::class, 'customLogin'])->name('login.custom');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('change-password', [AdminController::class, 'changePassword'])->name('change.password');
    Route::post('change-password', [AdminController::class, 'updatePassword'])->name('update.password');
    Route::get('profile', [AdminController::class, 'showProfile'])->name('show.profile');
    Route::get('profile/edit', [AdminController::class, 'editProfile'])->name('edit.profile');
    Route::put('profile-update', [AdminController::class, 'updateProfile'])->name('update.profile');

    // ---Social Media Links---
    Route::group(['prefix' => 'social-media', 'as' => 'social.media.'], function () {
        Route::controller(SocialMediaLinkController::class)->group(function() {
            Route::get("/show", "show")->name("show");
            Route::get("/create", "create")->name("create");
            Route::post("/storeOrUpdate", "storeOrUpdate")->name("storeOrUpdate");
        });
    });

    Route::group(['prefix' => 'app', 'as' => 'app.'], function () {
        Route::controller(AppSettingController::class)->group(function() {
            Route::get("/setting", "setting")->name("setting");
            Route::post("/setting-update", "settingUpdate")->name("setting.update");
        });
    });
    // Add other admin routes here...
});
