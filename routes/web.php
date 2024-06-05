<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MobController; 
use App\Http\Controllers\Mob2Controller; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErasmusInfoController;


use App\Http\Controllers\ChartController;
Route::get('/chart', [ChartController::class, 'index']);



// routes/web.php
use App\Http\Controllers\InstitutionController;

Route::resource('chiffres', ErasmusInfoController::class);
Route::post('layout/search', [ErasmusInfoController::class, 'search'])->name('layout.search');


Route::get('/erasmus-infos', [ErasmusInfoController::class, 'index']);




Route::get('institutions/create-step1', [InstitutionController::class, 'createStep1'])->name('institutions.create.step1');
Route::post('institutions/create-step1', [InstitutionController::class, 'postCreateStep1'])->name('institutions.create.step1.post');

Route::get('institutions/create-step2', [InstitutionController::class, 'createStep2'])->name('institutions.create.step2');
Route::post('institutions/create-step2', [InstitutionController::class, 'postCreateStep2'])->name('institutions.create.step2.post');

Route::get('institutions/create-step3', [InstitutionController::class, 'createStep3'])->name('institutions.create.step3');
Route::post('institutions/create-step3', [InstitutionController::class, 'postCreateStep3'])->name('institutions.create.step3.post');

Route::post('institutions/store', [InstitutionController::class, 'store'])->name('institutions.store');


use App\Http\Controllers\RealizedMobilityController;

Route::resource('mobs2', Mob2Controller::class);
Route::post('mobs2/search', [Mob2Controller::class, 'search'])->name('mobs2.search');

Route::resource('mobs', MobController::class);
Route::post('mobs/search', [MobController::class, 'search'])->name('mobs.search');


Route::controller(InstitutionController::class)->group(function(){

    Route::get('/update_form','update_form');

    Route::post('post','store');

});





Route::get('/layout', function () {
    return view('layout');
});


Route::get('/icm', function () {
    return view('icm');
});








use App\Http\Controllers\HomeController;

Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
Route::get('/user', [HomeController::class, 'user'])->name('user');

// Route pour l'accueil après login
Route::get('/home', [HomeController::class, 'index'])->name('home');














Route::get('admin/erasmusNumbers', function () {
    return view('admin.erasmusNumbers');
});

Route::get('admin/index', function () {
    return view('admin.index');
});

Route::get('admin/statistics', function () {
    return view('admin.statistics');
});


Route::get('admin/contactUs', function () {
    return view('admin.contactUs');
});



Route::get('admin/forums', function () {
    return view('admin.forums');
});










Route::get('/', function () {
    return view('welcome');
});




Route::get('institutions/create-step1', function () {
    return view('institutions.create-step1');
});


Route::get('/myInstitution', function () {
    return view('myInstitution');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/forums', function () {
    return view('forums');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/project_form', function () {
    return view('base2');
});

Route::get('/project_form2', function () {
    return view('base');
});

Route::get('/resources', function () {
    return view('erasmus_infos.index');
});

Route::get('/statistics', function () {
    return view('statistics');
});

Route::get('/update_form', function () {
    return view('update_form');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/admin/index', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('user');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('admin')->name('admin.')->namespace('App\Http\Controllers\Admin')->group(function() {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::middleware('auth:admin')->group(function() {
        Route::get('dashboard', 'AdminController@index')->name('dashboard');
    });
});

Route::prefix('user')->name('user.')->namespace('App\Http\Controllers\User')->group(function() {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::middleware('auth:user')->group(function() {
        Route::get('dashboard', 'UserController@index')->name('dashboard');
    });
});
