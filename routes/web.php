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
Route::get('/login',[AuthenticationController::class, 'userlogin'])->name('login');

Route::get('/admin/view/{id}',[User_Controller::class, 'viewUser'])->name('viewUser');

Route::get('admin/welcome',[User_Controller::class, 'showUsers'])->name('showUsers');

Route::get('/admin/create',[User_Controller::class, 'createUser'])->name('fillDetails');

Route::post('/admin/create',[User_Controller::class, 'saveUser'])->name('createUser');

Route::post('/admin/view/{id}',[User_Controller::class, 'editUser'])->name('editUser');

Route::post('/admin/delete/{id}',[User_Controller::class, 'DeleteUser'])->name('deleteUser');

Route::post('/admin/interests',[User_Controller::class, 'similarInterest'])->name('similarInterest');


 