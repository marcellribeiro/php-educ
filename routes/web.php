<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestadorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/videos', function () {
    return view('videos');
});
Route::get('/canais', function () {
    return view('canais');
});


Route::get('/testador', [TestadorController::class, 'index'])->name('testador');
Route::post('/testador/resultado',[TestadorController::class, 'testar'])->name('testar');
