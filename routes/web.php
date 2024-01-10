<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peopleController;

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
Route::get('/127.0.0.1/Korczynski/50537/people', [peopleController::class, 'index']);
Route::get('/127.0.0.1/Korczynski/50537/people/{id}', [peopleController::class, 'show']);
Route::post('/127.0.0.1/Korczynski/50537/people', [peopleController::class, 'create']);
Route::put('/127.0.0.1/Korczynski/50537/people/{id}', [peopleController::class, 'update']);
Route::delete('/127.0.0.1/Korczynski/50537/people/{id}', [peopleController::class, 'delete']);
