<?php

use Illuminate\Support\Facades\Auth;
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
    if (Auth::check()) {
        return redirect('administrator/home');
    }
    return view('auth.login');
});

Route::get('/test', function () {
    return view('layouts.dashboard');
    // return \App\Models\ServiceModel::orderBy('location')->distinct('location')->count();
});

/* ----------------admin only route ------------*/
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

});

Route::get('/administrator/home', App\Http\Livewire\AdminDashboard::class)->middleware('auth');


Route::get('/home', function () {
    return redirect('administrator/home');
})->name('home')->middleware('auth');
Route::get('/profile', App\Http\Livewire\ImageUpload::class)->name('profile')->middleware('auth');