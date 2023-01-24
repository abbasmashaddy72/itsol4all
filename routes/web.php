<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
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

// Frontend URL
Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::get('/change-language/{lang}', [LanguageController::class, 'changeLanguage']);
    Route::get('', 'FrontendController@index')->name('homepage');
    Route::get('projects', 'FrontendController@projects')->name('projects');
    Route::get('projectSingle', 'FrontendController@projectSingle')->name('projectSingle');
    Route::get('aboutUs', 'FrontendController@aboutUs')->name('aboutUs');
    Route::get('contactUs', 'FrontendController@contactUs')->name('contactUs');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['web', 'auth', 'verified'], 'namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('/dashboard', function () {
        view()->share('title', 'Dashboard');
        return view('dashboard');
    })->name('dashboard');
    Route::get('role', [RoleController::class, 'index'])->name('role.index');
    Route::get('user', [UserController::class, 'index'])->name('user.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/{user}/impersonate', 'UsersController@impersonate')->name('users.impersonate');
    Route::get('/leave-impersonate', 'UsersController@leaveImpersonate')->name('users.leave-impersonate');
});

require __DIR__ . '/auth.php';
