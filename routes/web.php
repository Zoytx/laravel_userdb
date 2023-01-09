<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_Controller;

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

Route::get('/view/{id}',[User_Controller::class, 'viewUser']);

Route::get('/',[User_Controller::class, 'showUsers'])->name('showUsers');

Route::get('/create',[User_Controller::class, 'createUser']);

Route::post('/create',[User_Controller::class, 'saveUser'])->name('createUser');

Route::post('/view/{id}',[User_Controller::class, 'editUser'])->name('editUser');