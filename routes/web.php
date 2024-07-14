<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhachHangsCtroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admins\SanPhamController;



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
// Route::get('/hello',function(){
//     return view('xinchao');
// });

// Route::view('/hello','xinchao');

//Truyen du lieu sang view
// Route::get('/hello',function(){
//     $title="Ban vu dep trai";
//     $text="Ban vu dep trai nhat nam dinh";
//     return view('xinchao', ['tittle'=> $title ,'text'=> $text]);
// });

// Route::view('/hello','xinchao',[
//     'title' => 'Hi hi xin chao',
//     'text' => 'Chao bay by!',
// ]);
// tao 1 route tro den 1 ham trong controller
Route::get('/khach_hang', [KhachHangsCtroller::class, 'indexkh']);
Route::get('/home', [HomeController::class, 'home']);

Route::get('/client', [HomeController::class, 'index']);
//day la route resource
Route::get('sanpham/test', [SanPhamController::class, 'test'])->name('sanpham.test');
Route::resource('sanpham', SanPhamController::class);