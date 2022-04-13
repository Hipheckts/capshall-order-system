<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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
    return view('welcome');
});


Route::get('/dashboard', [MenuController::class, 'index'])->middleware(['auth']);

Route::get('/add-to-tray/{id}/{price}', [MenuController::class, 'addToTray'])->name('add-to-tray')->middleware(['auth']);

Route::get('/success', [MenuController::class, 'completePurchase'])->middleware(['auth']);

require __DIR__.'/auth.php';
