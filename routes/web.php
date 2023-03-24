<?php

use App\Models\Bookies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FaceBookController;
use App\Http\Controllers\Auth\RegisterController;


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

Route::get('contact-us', function () {
    return view('contact');
})->name('contact-us');
Route::get('how-it-works', function () {
    return view('how_it_works');
})->name('how_it_works');
Route::get('maintainance', function () {
    return view('maintainance');
})->name('maintainace');
Route::get('privacy_policy', function () {
    return view('privacy_policy');
})->name('privacy_policy');
Route::get('faq', function () {
    return view('faq');
})->name('faq');
Route::get('/', [MainController::class,'index'])->name('index');
// Route::get('/', function () {
//     return view('maintainance');
// })->name('maintainance');

Route::get('Unverified', function () {
    return view('auth.unverified');
});

Route::get('/converter', [MainController::class, 'converter'])->name('converter');
Route::get('/conversions', [MainController::class, 'conversions'])->name('conversions');
Route::get('/fixtures', [MainController::class, 'fixtures'])->name('fixtures');

Auth::routes();

Route::post('/convert', [MainController::class, 'store'])->name('convert');
Route::post('/contact_us', [MainController::class, 'contact'])->name('contact_us');
Route::post('/contact-us', [MainController::class, 'contact_us'])->name('contact');


Route::post('create/bookies', [MainController::class, 'store_bookies'])->name('store_bookies');
// Route::post('update/bookies', [MainController::class, 'update_bookies']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('googleCallback');

Route::get('auth/facebook', [FaceBookController::class, 'loginUsingFacebook'])->name('facebook');
Route::get('callback/', [FaceBookController::class, 'callbackFromFacebook'])->name('facebookCallback');
Route::post('/resend',[RegisterController::class, 'resendEmail'])->name('resendEmail');

Route::get('/confirm_email', function () {
    return view('auth.verify-email');
});
Route::post('/verifyEmail', [RegisterController::class, 'EmailVerfication'])->name('verify');
Route::post('/update/{id}',[MainController::class,'UpdateProfile'])->name('update');
Route::post('/update_password/{id}',[MainController::class,'ChangePassword'])->name('change_password');

