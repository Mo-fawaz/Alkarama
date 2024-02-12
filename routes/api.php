<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\SeasonController;
use App\Http\Controllers\api\LeagueController;
use App\Http\Controllers\api\associationController;
use App\Http\Controllers\api\TopfanController;






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


//Season

Route::prefix('/season')->group(function () {
    Route::post('/store',[SeasonController::class,'store'])->name('Season.store');
});

Route::prefix('/season')->group(function () {
    Route::get('/index',[SeasonController::class,'index'])->name('Season.index');
});


//League
Route::prefix('/league')->group(function () {
    Route::get('/index',[leagueController::class,'index'])->name('league.index');
});

Route::prefix('/league')->group(function () {
    Route::post('/search',[leagueController::class,'search'])->name('league.search');
});


//association
Route::prefix('/association')->group(function () {
    Route::get('/index',[associationController::class,'index'])->name('association.index');
});

//Topfan
Route::prefix('/Topfan')->group(function () {
    Route::get('/index',[TopfanController::class,'index'])->name('Topfan.index');
});