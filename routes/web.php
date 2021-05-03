<?php

use App\Http\Controllers\BatimentController;
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
    return view('welcome');
});

Route::get('/batiment', [BatimentController::class,'index']);

Route::post("/batiment/{id}/delete", [BatimentController::class, "destroy"]);

Route::get('/formation', [BatimentController::class,'index']);

Route::post("/formation/{id}/delete", [BatimentController::class, "destroy"]);