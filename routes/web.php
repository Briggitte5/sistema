<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\TareaController;
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
    return view('auth.login');
});

/*Route::get('/trabajo', function () {
    return view('trabajo.index');
});
*/
Route::get('/trabajo/create',[TrabajoController::class,'create']);
Route::get('/tarea/create',[TareaController::class,'create']);

Route::resource('trabajo',TrabajoController::class)->middleware('auth');
Route::resource('tarea',TareaController::class)->middleware('auth');

Auth::routes(['register'=>true,'reset'=>true]);

Route::get('/home', [TrabajoController::class, 'index'])->name('home');
Route::get('/home', [TareaController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
     
    Route::get('/', [TrabajoController::class, 'index'])->name('home');
    
});

Route::group(['middleware' => 'auth'], function () {
     
    Route::get('/', [TareaController::class, 'index'])->name('home');
    
});

