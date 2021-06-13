<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/create', [HomeController::class, 'create']);
    Route::post('/add', [HomeController::class, 'add']);
    Route::get('/edit/{id}', [HomeController::class, 'edit']);
    Route::post('/update/{id}', [HomeController::class, 'edit']);
    Route::get('/delete/{id}', [HomeController::class, 'delete']);

    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/create', [CategoryController::class, 'create']);
    Route::post('/category/add', [CategoryController::class, 'add']);
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('/category/update/{id}', [CategoryController::class, 'edit']);
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);


    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/doLogin', [AuthController::class, 'doLogin']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/doRegister', [AuthController::class, 'doRegister']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/เพิ่มผู้ใช้งานตัวอย่าง', function(){
        $user = new User();
        $user->name = "สมชาย ใจดี";
        $user->email = "somchai@gmail.com";
        $user->password = Hash::make("1234");
        $user->save();
        return "Success! โปรดอย่ารีเฟรชหน้านี้มันจะเพิ่มสามชายอีกคน หรือไม่ก็ฟ้องว่าอีเมล์ซ้ำ";
    });
