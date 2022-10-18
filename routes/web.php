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

Route::group(['middleware' => 'auth'],function(){

   Route::group([
       'prefix' => 'user',
       'as' => 'user.'
   ],function(){
        Route::get('/',[UserController::class,'index'])->name('index');
        Route::get('/profile',[UserController::class,'viewprofile'])->name('profile.view');
        Route::get('/profile/edit',[UserController::class,'editprofile'])->name('profile.edit');
        Route::post('/profile/edit',[UserController::class,'updateprofile'])->name('profile.update');
   });


   Route::group([
       'middleware' => 'is_admin',
       'prefix' =>'admin',
       'as' => 'admin.',
   ],function(){
       Route::get('/',[AdminController::class,'index'])->name('index');
   });
});

require __DIR__.'/auth.php';
