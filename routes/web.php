<?php

use App\Http\Controllers\CommercialeController;
use App\Http\Controllers\ProspectController;
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


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('dashboard');
    Route::resource('commerciale', CommercialeController::class);
    Route::resource('prospect', ProspectController::class);
    // // route  prospect
    // Route::resource('prospect', ProspectController::class);

    // // roote prospect activites
    // Route::get('/activites',[ActiviteController::class,'allActivities'])->name('activities');
    // Route::get('prospect/{prospect}/activites/create', [ActiviteController::class,'create'])->name('prospect.activites.create');
    // Route::post('prospect/{prospect}/activites', [ActiviteController::class,'store'])->name('prospect.activites.store');
    // Route::get('prospect/activites/{activite}/edit', [ActiviteController::class,'edit'])->name('prospect.activites.edit');

    // // Plannings
    // Route::get('/plannings', function () {
    //     return view('plannings');
    // })->name('plannings');

    // // Fiche Client
    // Route::get('fclient/create/{activite}', [FclientController::class,'create'])->name('fclient.create');
    // Route::post('fclient/store/{activite}', [FclientController::class,'store'])->name('fclient.store');
    // Route::get('fclient/cancel/{activite}', [FclientController::class,'cancel'])->name('fclient.cancel');
    // Route::post('fclient/cancel_store/{activite}', [FclientController::class,'cancel_store'])->name('fclient.cancel_store');
});
require __DIR__.'/auth.php';
