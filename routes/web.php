<?php

use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DistrictController;
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
});


Route::get('/admin/', function () {
    return view('backend.index');
});

Route::get('/admin/profile', function () {
    return view('backend.profile.index');
});

Route::get('/admin/view-profile', function () {
    return view('backend.profile.view');
});




Route::get('/admin/create-links', function () {
    return view('backend.link.create_link');
});

Route::get('/admin/profile-links', function () {
    return view('backend.link.view_links');
});




Route::resource('admin/province', ProvinceController::class);

Route::resource('admin/district', DistrictController::class);
