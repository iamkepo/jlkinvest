<?php

use App\Http\Livewire\Activites;
use App\Http\Livewire\Plannings;
use App\Http\Livewire\Produits;
use App\Http\Livewire\Prospects;
use App\Http\Livewire\Utilisateurs;
use App\Models\Activite;
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

    Route::get("/propects",Prospects::class)->name("prospect.index");
    Route::get("/activite",Activites::class)->name("activite.index");
    Route::get("/plannings",Plannings::class)->name("planning.index");

    Route::group([
        "middleware"=>["auth.admin"],
        "prefix"=>"admin",
        "as" => "admin."
        ],function(){
            Route::get("/user",Utilisateurs::class)->name("user.index");
            Route::get("/produit",Produits::class)->name(("produit.index"));
    });
});
require __DIR__.'/auth.php';
