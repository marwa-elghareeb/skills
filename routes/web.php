<?php

//Admin
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Admin\AdminCoursesController;

use App\Http\Controllers\Admin\AdminAuthController;

//Portal
use App\Http\Controllers\Site\CoursesController;
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
//User
Auth::routes();
//verification
Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');

//Portal Routes:
Route::get('/', function () {
    return view('site.homePages');
});
Route::get('/home', function () {
    return view('site.homePages');
});
Route::get('/corses', [CoursesController::class, 'courses']);


//Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::post('/adminLogout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/adminhome', function () {
            return view('admin.adminhome');
        })->name('adminDashboard');

        Route::resource('all-courses', AdminCoursesController::class);
    
    });
});
