<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

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

// Jungle Safari
// Canter Ride
// Resorts
// school-group
// coorporate-group
// Destination Wedding
// Privacy
// Policy
// term-condition

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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::group(["middleware" => ["guest:admin"]], function() {
        // Route::controller(LoginController::class)->group(function() {
        //     Route::get('/login', 'showAdminLoginForm')->name('login_page');
        //     Route::post('/login', 'adminLogin')->name('login');
        // });
    });
    // Route::group(["middleware" => "auth:admin"], function () {
    //     Route::controller(AdminHomeController::class)->group(function() {
    //         Route::get("/dashboard", "index")->name("dashboard");
    //     });
    //     Route::post('/logout', [LoginController::class, 'adminLogout'])->name('logout');

    //     // ---Social Media Links---
    //     Route::group(['prefix' => 'social-media', 'as' => 'social.media.'], function () {
    //         Route::controller(SocialMediaLinkController::class)->group(function() {
    //             Route::get("/show", "show")->name("show");
    //             Route::get("/create", "create")->name("create");
    //             Route::post("/storeOrUpdate", "storeOrUpdate")->name("storeOrUpdate");
    //         });
    //     });

    //     Route::group(['prefix' => 'app', 'as' => 'app.'], function () {
    //         Route::controller(AppSettingController::class)->group(function() {
    //             Route::get("/setting", "setting")->name("setting");
    //             Route::post("/setting-update", "settingUpdate")->name("setting.update");
    //         });
    //     });

    //     Route::group(['prefix' => 'manage-front-end-content', 'as' => 'manage.front.end.content.'], function () {
    //         Route::controller(ManageFrontEndContentController::class)->group(function() {
    //             Route::get("/", "index")->name("index");
    //             Route::get("/get-page-detail/{page}", "getPageDetail")->name("get.page.detail");
    //             Route::get("/delete-faq-detail/{faq_id}", "deleteFaqDetail")->name("delete.faq.detail");
    //             Route::post("/store", "store")->name("store");
    //             Route::put("/update/{id}", "update")->name("update");
    //         });
    //     });

    //     Route::group(['prefix' => 'contact-us', 'as' => 'contact.us.'], function () {
    //         Route::controller(ContactUsController::class)->group(function() {
    //             Route::get("/", "index")->name("index");
    //         });
    //     });

    //     Route::group(['prefix' => 'quote', 'as' => 'quote.'], function () {
    //         Route::controller(QuoteController::class)->group(function() {
    //             Route::get("/", "index")->name("index");
    //         });
    //     });

        //---users---
        // Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        //     Route::controller(UserController::class)->group(function() {
        //         Route::get("/", "index")->name("index");
        //     });
        // });
    // });
});
