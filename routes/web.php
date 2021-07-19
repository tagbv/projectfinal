<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminController;
use Illuminate\Support\Facades\Auth;

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
});
// admin
// login admin
Route::get('/admin/login', [adminController::class, 'login']);
Route::post('/admin/login', [adminController::class, 'loginPost'])->name('admin.loginPost');
Route::get('/admin/logout', [adminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'product'], function () {
        Route::get('list',  [adminController::class, 'getlist']);
        Route::get('add', [adminController::class, 'getAdd']);
        Route::get('add2', [adminController::class, 'insert']);
        Route::get('edit', [adminController::class, 'edit']);
        // Route::post('add2', 'admin\ProductController@insert');
        // Route::get('edit/{id}', 'admin\ProductController@getEdit')->name('getEdit-product');
        // Route::post('edit/{id}', 'admin\ProductController@postEdit')->name('postEdit-product');
        // Route::get('delete/{id}', 'admin\ProductController@getDelete')->name('delete');
    });
    // Route::group(['prefix' => 'type_product'], function () {
    //     Route::get('list', 'admin\Type_ProductController@getList');
    //     Route::get('add', 'admin\Type_ProductController@getAdd');
    //     Route::post('add2', 'admin\Type_ProductController@insert');
    //     Route::get('edit/{id_type}', 'admin\Type_ProductController@getEdit')->name('getEdit-type_product');
    //     Route::post('edit/{id_type}', 'admin\Type_ProductController@postEdit')->name('postEdit-type_product');
    //     Route::get('delete2/{id_type}', 'admin\Type_ProductController@delete2')->name('delete2');
    // });
    // Route::group(['prefix' => 'user'], function () {
    //     Route::get('list', 'admin\AdminController@getuserList');
    //     Route::get('add', 'admin\AdminController@getuserAdd');
    //     Route::get('edit', 'admin\AdminController@getuserEdit');
    // });
    // Route::group(['prefix' => 'order'], function () {
    //     Route::get('list', 'admin\AdminController@getorderList');
    // });
});
