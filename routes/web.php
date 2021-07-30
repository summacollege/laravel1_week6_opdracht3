<?php

use App\Http\Controllers\KlantgegevensController;
use App\Models\Klantgegeven;
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

Route::get('/', function () {
    return "nog te doen";
});
Route::get('/klantgegevens', [KlantgegevensController::class, 'index'])->name('klantgegevens.index'); 
