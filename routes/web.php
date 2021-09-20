<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\BasketController;
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

Route::get('/', [PageController::class, 'direct_index'])->name('direct_index');
Route::get('/', [FilterController::class, 'product_card'])->name('getCardStPage');
Route::get('/catalog={idCatalog}', [PageController::class, 'direct_catalog'])->name('direct_catalog');
Route::get('/catalog={idCatalog}', [FilterController::class, 'setAllCardsForCategory'])->name('cat');
Route::get('/catalog={idCatalog}', [FilterController::class, 'filtersCategory'])->name('filter');
Route::get('/basket', [BasketController::class, 'basket'])->name('direct_basket');
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');
Route::post('/basket/remove-all/{id}', [BasketController::class, 'basketRemoveAll'])->name('basket-remove-all');
Route::post('/basket/confirm', [BasketController::class, 'basketConfirm'])->name('basket-confirm');





