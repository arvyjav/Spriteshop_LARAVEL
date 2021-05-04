<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsController;
use App\Http\Controllers\MenuController;

//USERZ
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploaderController;

use App\Http\Controllers\CommentController;
use RealRashid\SweetAlert\Facades\Alert;
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
    // Alert::success('Success Title', 'Success Message');
    toast('Welcome bro!', 'success');

    return view('qing');
});
Route::view('/about', 'about');
Route::view('/services', 'services');
Route::get('/report', [CommentController::class, 'create'])->name('report');
Route::get('/shop', [MenuController::class, 'click']);



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', [AdminController::class,'index'])->name('admin');

    Route::get('/crud', [WebsController::class, 'index'])->name('crud');
    Route::get('/webs', [WebsController::class, 'create']);
    Route::get('/webs/show/{id}', [WebsController::class, 'show']);
    Route::post('/webs/store', [WebsController::class, 'store']);
    Route::get('/webs/edit/{id}', [WebsController::class, 'edit']);
    Route::post('/webs/update/{id}', [WebsController::class, 'update']);
    Route::get('/webs/destroy/{id}', [WebsController::class, 'destroy']);


    Route::get('/crud2', [MenuController::class, 'index'])->name('crud2');
    Route::get('/sampahs', [MenuController::class, 'create']);
    Route::post('/sampahs/store', [MenuController::class, 'store']);
    Route::get('/sampahs/edit/{id}', [MenuController::class, 'edit']);
    Route::post('/sampahs/update/{id}', [MenuController::class, 'update']);
    Route::get('/sampahs/show/{id}', [MenuController::class, 'show']);
    Route::get('/sampahs/destroy/{id}', [MenuController::class, 'destroy']);

    Route::get('/detailshop/shop/{id}', [MenuController::class, 'shop']);
    Route::get('/shopadmin', [MenuController::class, 'clickadmin']);
    Route::get('/shop/shop/{id}', [MenuController::class, 'shopadmin']);
    Route::get('/shop', [MenuController::class, 'click']);
   

    Route::get('/comments', [CommentController::class, 'comments'])->name('comments');
    Route::get('/report', [CommentController::class, 'create'])->name('report');
    Route::post('/report/store', [CommentController::class, 'store']);
    Route::delete('/report/destroy/{id}', [CommentController::class, 'destroy']);

    Route::view('/vout', 'admin/about')->name('vout');
    Route::view('/wist', 'admin/wistlist');
    Route::view('/acc', 'admin/account');


});

Route::group(['middleware' => 'uploader'], function() {

    Route::get('/uploader', [UploaderController::class,'index'])->name('uploader');

    Route::get('/detailshop/shop/{id}', [MenuController::class, 'shop']);
    Route::get('/shopadmin', [MenuController::class, 'clickadmin']);
    Route::get('/shop/shop/{id}', [MenuController::class, 'shopadmin']);


    Route::get('/comments', [CommentController::class, 'comments'])->name('comments');
    Route::get('/report', [CommentController::class, 'create'])->name('report');
    Route::post('/report/store', [CommentController::class, 'store']);
    Route::delete('/report/destroy/{id}', [CommentController::class, 'destroy']);

    
    Route::view('/vout', 'admin/about');
    Route::get('/shop', [MenuController::class, 'click']);
    Route::view('/wist', 'admin/wistlist');
    Route::view('/acc', 'admin/account');

});

Route::group(['middleware' => 'user'], function() {
    Route::get('/report', [CommentController::class, 'create'])->name('report');
    Route::get('/account', function () {
        return view('account');
    });
    Route::view('/about', 'about');
    Route::view('/services', 'services');
    
    //In Admin / Uploader
    
    Route::view('/more', 'detailpage/moreabout');
    
    
    Route::view('/register', 'register');
    Route::get('/shop', [MenuController::class, 'click']);

    //SHOP
    Route::view('/cart', 'detailpage/cart');
    
    Route::get('/user', [UserController::class,'index'])->name('user');


});