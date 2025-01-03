<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// Login & logout function
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', function () { return view('auth.register');})->name('register');

// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::middleware('auth')->group(function () {
    
    // Student Management
    Route::get('student', function () { return view('pages.student.index');})->name('student');
    Route::get('student/create', function () { return view('pages.student.create');})->name('student.create');
    Route::get('student/edit', function () { return view('pages.student.edit');})->name('student.edit');
    Route::get('student/show', function () { return view('pages.student.show');})->name('student.show');
    Route::get('student/trash', function () { return view('pages.student.trash');})->name('student.trash');

    // Vendor Management
    Route::get('peniaga', function () { return view('pages.peniaga.index');})->name('peniaga');
    Route::get('peniaga/create', function () { return view('pages.peniaga.create');})->name('peniaga.create');
    Route::get('peniaga/edit', function () { return view('pages.peniaga.edit');})->name('peniaga.edit');
    Route::get('peniaga/show', function () { return view('pages.peniaga.show');})->name('peniaga.show');
    Route::get('peniaga/trash', function () { return view('pages.peniaga.trash');})->name('peniaga.trash');

    // Zakat Management
    Route::get('dana-zakat', function () { return view('pages.dana-zakat.index');})->name('dana-zakat');
    Route::get('dana-zakat/create', function () { return view('pages.dana-zakat.create');})->name('dana-zakat.create');
    Route::get('dana-zakat/edit', function () { return view('pages.dana-zakat.edit');})->name('dana-zakat.edit');
    Route::get('dana-zakat/show', function () { return view('pages.dana-zakat.show');})->name('dana-zakat.show');
    Route::get('dana-zakat/trash', function () { return view('pages.dana-zakat.trash');})->name('dana-zakat.trash');

    // Zakat Management
    Route::get('agihan-kupon', function () { return view('pages.agihan-kupon.index');})->name('agihan-kupon');
    Route::get('agihan-kupon/create', function () { return view('pages.agihan-kupon.create');})->name('agihan-kupon.create');
    Route::get('agihan-kupon/edit', function () { return view('pages.agihan-kupon.edit');})->name('agihan-kupon.edit');
    Route::get('agihan-kupon/show', function () { return view('pages.agihan-kupon.show');})->name('agihan-kupon.show');
    Route::get('agihan-kupon/trash', function () { return view('pages.agihan-kupon.trash');})->name('agihan-kupon.trash');

    // transaksi Management
    Route::get('transaksi', function () { return view('pages.transaksi.index');})->name('transaksi');
    Route::get('transaksi/claim', function () { return view('pages.transaksi.claim');})->name('transaksi.claim');
    Route::get('transaksi/edit', function () { return view('pages.transaksi.edit');})->name('transaksi.edit');
    Route::get('transaksi/show', function () { return view('pages.transaksi.show');})->name('transaksi.show');
    Route::get('transaksi/trash', function () { return view('pages.transaksi.trash');})->name('transaksi.trash');

    //Tuntutan Peniaga Management
    Route::get('tuntutan-peniaga', function () { return view('pages.tuntutan-peniaga.index');})->name('tuntutan-peniaga');
    Route::get('tuntutan-peniaga/create', function () { return view('pages.tuntutan-peniaga.create');})->name('tuntutan-peniaga.create');
    Route::get('tuntutan-peniaga/edit', function () { return view('pages.tuntutan-peniaga.edit');})->name('tuntutan-peniaga.edit');
    Route::get('tuntutan-peniaga/show', function () { return view('pages.tuntutan-peniaga.show');})->name('tuntutan-peniaga.show');
    Route::get('tuntutan-peniaga/trash', function () { return view('pages.tuntutan-peniaga.trash');})->name('tuntutan-peniaga.trash');

    //Campus
    Route::get('campus', 'CampusController@index')->name('campus');
    Route::get('campus/view/{id}', 'CampusController@show')->name('campus.show');
    Route::get('/campus/search', 'CampusController@search')->name('campus.search');

    //Position
    Route::get('position', 'PositionController@index')->name('position');
    Route::get('position/view/{id}', 'PositionController@show')->name('position.show');
    Route::get('/position/search', 'PositionController@search')->name('position.search');


    Route::get('/home', 'HomeController@index')->name('home');

    // User Profile
    Route::get('profile/{id}', 'UserProfileController@show')->name('profile.show');
    Route::get('profile/{id}/edit', 'UserProfileController@edit')->name('profile.edit');
    Route::put('profile/{id}', 'UserProfileController@update')->name('profile.update');
    Route::get('profile/{id}/change-password', 'UserProfileController@changePasswordForm')->name('profile.change-password');
    Route::post('profile/{id}/change-password', 'UserProfileController@changePassword')->name('profile.update-password');

    // Superadmin - Activity Log
    Route::get('activity-log', 'ActivityLogController@index')->name('activity-log');
    Route::get('/debug-logs', 'ActivityLogController@showDebugLogs')->name('logs.debug');

    // User Management
    Route::get('user', 'UserController@index')->name('user');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('user/store', 'UserController@store')->name('user.store');
    Route::get('user/{id}/edit', 'UserController@edit')->name('user.edit');
    Route::post('user/{id}', 'UserController@update')->name('user.update');
    Route::get('user/view/{id}', 'UserController@show')->name('user.show');
    Route::get('/user/search', 'UserController@search')->name('user.search');
    Route::delete('user/{id}', 'UserController@destroy')->name('user.destroy');
    Route::get('/user/trash', 'UserController@trashList')->name('user.trash');
    Route::get('/user/{id}/restore', 'UserController@restore')->name('user.restore');
    Route::delete('/user/{id}/force-delete', 'UserController@forceDelete')->name('user.forceDelete');


    // User Role Management
    Route::get('user-role', 'UserRoleController@index')->name('user-role');
    Route::get('user-role/create', 'UserRoleController@create')->name('user-role.create');
    Route::post('user-role/store', 'UserRoleController@store')->name('user-role.store');
    Route::get('user-role/{id}/edit', 'UserRoleController@edit')->name('user-role.edit');
    Route::post('user-role/{id}', 'UserRoleController@update')->name('user-role.update');
    Route::get('user-role/view/{id}', 'UserRoleController@show')->name('user-role.show');
    Route::get('/user-role/search', 'UserRoleController@search')->name('user-role.search');
    Route::delete('user-role/{id}', 'UserRoleController@destroy')->name('user-role.destroy');
    Route::get('/user-role/trash', 'UserRoleController@trashList')->name('user-role.trash');
    Route::get('/user-role/{id}/restore', 'UserRoleController@restore')->name('user-role.restore');
    Route::delete('/user-role/{id}/force-delete', 'UserRoleController@forceDelete')->name('user-role.forceDelete');

    //Campus
    Route::get('campus/create', 'CampusController@create')->name('campus.create');
    Route::post('campus/store', 'CampusController@store')->name('campus.store');
    Route::get('campus/{id}/edit', 'CampusController@edit')->name('campus.edit');
    Route::post('campus/{id}', 'CampusController@update')->name('campus.update');
    Route::delete('campus/{id}', 'CampusController@destroy')->name('campus.destroy');
    Route::get('/campus/trash', 'CampusController@trashList')->name('campus.trash');
    Route::get('/campus/{id}/restore', 'CampusController@restore')->name('campus.restore');
    Route::delete('/campus/{id}/force-delete', 'CampusController@forceDelete')->name('campus.forceDelete');

    //Position
    Route::get('position/create', 'PositionController@create')->name('position.create');
    Route::post('position/store', 'PositionController@store')->name('position.store');
    Route::get('position/{id}/edit', 'PositionController@edit')->name('position.edit');
    Route::post('position/{id}', 'PositionController@update')->name('position.update');
    Route::delete('position/{id}', 'PositionController@destroy')->name('position.destroy');
    Route::get('/position/trash', 'PositionController@trashList')->name('position.trash');
    Route::get('/position/{id}/restore', 'PositionController@restore')->name('position.restore');
    Route::delete('/position/{id}/force-delete', 'PositionController@forceDelete')->name('position.forceDelete');
});
