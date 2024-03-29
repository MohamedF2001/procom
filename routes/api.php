<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/commandes', 'App\Http\Controllers\HomeController@addCommande');
Route::delete('/admin/deleteCom/{id}', 'HomeController@destroyCommande')->name('admin.destroyCommande');
Route::delete('/admin/deleteCli/{id}', 'HomeController@destroyClient')->name('admin.destroyClient');

