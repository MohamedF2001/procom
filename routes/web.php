<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('customer/index');
});
Route::resource('/auth', AuthController::class);
Auth::routes();
// User Route
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[HomeController::class,'userHome'])->name('home');
});

// Editor Route
Route::middleware(['auth','user-role:editor'])->group(function()
{
    Route::get("/editor/home",[HomeController::class,'editorHome'])->name('home.editor');
});

// Admin Route
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[HomeController::class,'adminHome'])->name('home.admin');
});

Route::middleware(['auth','user-role:admin'])->group(function()
{
    // route pour ajouter une categorie et fastfood
    Route::post("admin/addcat",[HomeController::class,'store'])->name('admin.addcat');
    Route::post("admin/addfast",[HomeController::class,'storeFast'])->name('admin.addfast');
    Route::post("admin/addcommande",[HomeController::class,'storeCommande'])->name('admin.addcommande');
    // route pour lister
    Route::get("admin/listeCat",[HomeController::class,'displayCat'])->name('admin.listeCat');
    Route::get("admin/listeFast", [HomeController::class,'displayFast'])->name('admin.listeFast');
    Route::get("admin/listeCom", [HomeController::class,'displayCom'])->name('admin.listeCom');
});

//Route::post("/addCommande",[HomeController::class,'addCommande'])->name('addCommande');
Route::post('/commandes', [HomeController::class, 'addCommande']);

// routes au choix
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/cat",[HomeController::class,'homeCat'])->name('home.cat');
});
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/fast",[HomeController::class,'homeFast'])->name('home.fast');
});
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/commande",[HomeController::class,'homeCommande'])->name('home.commande');
});

