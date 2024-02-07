<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\api\HotelController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
$request = Request::capture()->getRequestUri();
$prefix=explode('/',$request);
if(!empty($prefix[1])){
   
    if($prefix[1]=='api')
    { 
        $prefix=$prefix[2];
    
    $controllerName = $prefix . 'Controller';
    Route::prefix($prefix)->group(function () use ($controllerName, $prefix ) {
        $controllerClass = "App\\Http\\Controllers\\api\\{$controllerName}";
        Route::get('edit/{id}', [$controllerClass, 'edit'])->name("{$prefix}.edit");
        Route::post('update/{id}',[$controllerClass, 'update'])->name("{$prefix}.update");
        Route::get('create', [$controllerClass, 'create'])->name("{$prefix}.create");
        Route::post('store', [$controllerClass, 'store'])->name("{$prefix}.store");
        Route::get('index', [$controllerClass, 'index'])->name("{$prefix}.index");
        Route::post('show', [$controllerClass, 'show'])->name("{$prefix}.show");
        Route::get('delete/{id}', [$controllerClass, 'destroy'])->name("{$prefix}.delete");
    });
    

}}
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | is assigned the "api" middleware group. Enjoy building your API!
// |
// */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
