<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SzakdogaController;
use App\Http\Controllers\UserController;


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

Route::get('/szakdogak', [SzakdogaController::class, 'index']);
Route::post('/szakdogak', [SzakdogaController::class, 'store']);
Route::put('/szakdogak/{id}', [SzakdogaController::class, 'update']);
Route::delete('/szakdogak/{id}', [SzakdogaController::class, 'destroy']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
});
require __DIR__ . '/auth.php';

require __DIR__ . '/auth.php';
