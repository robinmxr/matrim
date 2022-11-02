<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\SslCommerzPaymentController;
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

Route::get('/',[UserController::class,'home'])->name('home');

Route::get('/about',[UserController::class,'about'])->name('about');
Route::get('/contact',[UserController::class,'contact'])->name('contact');
Route::get('/search',[UserController::class,'search'])->name('search');
Route::get('/search/{gender}',[UserController::class,'searchresult'])->name('search.view');

Route::group(['middleware' => 'auth'],function(){

   Route::group([
       'prefix' => 'user',
       'as' => 'user.'
   ],function(){
        Route::get('/',[UserController::class,'index'])->name('index');
        Route::get('/profile',[UserController::class,'viewprofile'])->name('profile.view');
        Route::post('/profile',[UserController::class,'markReadNotifications'])->name('read.notifications');
        Route::get('/profile/edit',[UserController::class,'editprofile'])->name('profile.edit');
        Route::post('/profile/edit',[UserController::class,'updateprofile'])->name('profile.update');


        Route::get('/show',[UserController::class,'showUsers'])->name('list');
        Route::get('/show/{id}',[UserController::class,'viewUser'])->name('view');

        Route::get('/status',[UserController::class,'showStatus'])->name('status');
   });


   Route::group([
       'middleware' => 'is_admin',
       'prefix' =>'admin',
       'as' => 'admin.',
   ],function(){
       Route::get('/',[AdminController::class,'index'])->name('index');
       Route::post('/',[AdminController::class,'markReadNotifications'])->name('read.notifications');
       Route::get('/user/',[AdminController::class,'showUsers'])->name('user.show');
       Route::get('/user/{id}',[AdminController::class,'viewUser'])->name('user.view');
       Route::post('/user/{id}/approve',[AdminController::class,'approveUser'])->name('user.approve');
       Route::post('/user/{id}/decline',[AdminController::class,'declineUser'])->name('user.decline');


   });

    Route::get('/payment', [SslCommerzPaymentController::class, 'showPayment'])->name('payment.show');
});


//Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);



require __DIR__.'/auth.php';
