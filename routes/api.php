<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/brands', [TestController::class, 'getBrands'])->name('getBrands');
Route::get('/countries', [TestController::class, 'getCountries'])->name('getCountries');
Route::post('/brands-search', [TestController::class, 'getSearchString'])->name('getSearchString');
