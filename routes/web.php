<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
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

Route::get('/test', function () {
    return view('admin.dashboard');
});

Route::group(['middleware' => 'auth'],function(){

   Route::group([
       'prefix' => 'user',
       'as' => 'user.'
   ],function(){
        Route::get('/',[UserController::class,'index'])->name('index');
        Route::get('/profile',[UserController::class,'viewprofile'])->name('profile.view');
        Route::get('/profile/edit',[UserController::class,'editprofile'])->name('profile.edit');
        Route::post('/profile/edit',[UserController::class,'updateprofile'])->name('profile.update');


        Route::get('/show',[UserController::class,'showUsers'])->name('list');
        Route::get('/show/{id}',[UserController::class,'viewUser'])->name('view');
   });


   Route::group([
       'middleware' => 'is_admin',
       'prefix' =>'admin',
       'as' => 'admin.',
   ],function(){
       Route::get('/',[AdminController::class,'index'])->name('index');
       Route::get('/user/',[AdminController::class,'showUsers'])->name('user.show');
       Route::get('/user/{id}',[AdminController::class,'viewUser'])->name('user.view');
       Route::post('/user/{id}/approve',[AdminController::class,'approveUser'])->name('user.approve');
       Route::post('/user/{id}',[AdminController::class,'declineUser'])->name('user.decline');


   });
});

require __DIR__.'/auth.php';
