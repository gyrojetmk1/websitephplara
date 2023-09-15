<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\sessioncontroller;
use App\Http\Controllers\uploadcontroller;
use App\Http\Controllers\mainpagescontroller;
use App\Models\cachepage;
use App\Models\posts;
use App\Livewire\Counter;
use App\Http\Middleware\adminverify;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
| will do
|
*/

Route::get('/', [mainpagescontroller::class, 'home']);

Route::get('/tests', [mainpagescontroller::class, 'tests']);

Route::get('/register', [registercontroller::class, 'render'])->middleware('guest');

Route::post('/register', [registercontroller::class, 'resgister'])->middleware('guest');

Route::get('/logout', [sessioncontroller::class, 'logout']);

Route::get('/login', [sessioncontroller::class, 'render'])->middleware('guest');

Route::post('/login', [sessioncontroller::class, 'login'])->middleware('guest');

Route::get('/admin/upload', [uploadcontroller::class, 'uploadpg'])->middleware('notguest', 'admin');

Route::post('/admin/upload', [uploadcontroller::class, 'upload'])->middleware('notguest', 'admin');Route::get('/admin/upload', [uploadcontroller::class, 'uploadpg'])->middleware('notguest', 'admin');

Route::post('/admin/delete', [uploadcontroller::class, 'delete'])->middleware('notguest', 'admin');

Route::get('/admin/delete', [uploadcontroller::class, 'deletepg'])->middleware('notguest', 'admin');

