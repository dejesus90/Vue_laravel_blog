<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publicacionesController;

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
    return view('blogs.index');
});
Route::get('/publicaciones', [publicacionesController::class, 'index']);
Route::post('/nuevapublicacion'     , [publicacionesController::class, 'store']);

