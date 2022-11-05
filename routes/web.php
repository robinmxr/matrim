<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\HallOwner\HallOwnerController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['middleware' => 'auth'],function(){
//User Routes
   Route::group([
       'prefix' => 'user',
       'as' => 'user.'
   ],function(){
        Route::get('/',[UserController::class,'index'])->name('index');
   });

//Admin Routes
   Route::group([
       'middleware' => 'is_admin',
       'prefix' =>'admin',
       'as' => 'admin.',
   ],function(){
       Route::get('/',[AdminController::class,'index'])->name('index');

       Route::get('/movie',[MovieController::class,'showMovie'])->name('movie.show');
       Route::get('/movie/{id}',[MovieController::class,'viewMovie'])->name('movie.view');
       Route::get('/movie/create',[MovieController::class,'createMovie'])->name('movie.create');

   });

   //Hall Owner
    Route::group([
        'middleware' => 'is_hallowner',
        'prefix' =>'hallowner',
        'as' => 'hallowner.',
    ],function(){
        Route::get('/',[HallOwnerController::class,'index'])->name('index');
    });
});

require __DIR__.'/auth.php';
