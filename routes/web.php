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
    $mon = \App\Models\ServiceModel::
        whereYear('createdAt', 2023)
        ->where('location', 'Ogun')
        ->selectRaw('month(createdAt) as month, count(*) as count')
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('count', 'month')
        ->toArray();
    return returnArr($mon);
    // return \App\Models\ServiceModel::orderBy('location')->distinct('location')->count();
});

/* ----------------admin only route ------------*/
Route::group(['middleware' => ['auth']], function () {
    Route::get('/administrator/home', App\Http\Livewire\AdminDashboard::class)->name('dashboard');
    Route::get('/state/{state:location}', App\Http\Livewire\States::class)->name('state');
});



Route::get('/home', function () {
    return redirect('administrator/home');
})->name('home')->middleware('auth');
Route::get('/profile', App\Http\Livewire\ImageUpload::class)->name('profile')->middleware('auth');