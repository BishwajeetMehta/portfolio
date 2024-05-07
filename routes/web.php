<?php
use App\mydetail;
use App\descripton;

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
    $data['info'] = mydetail::find(1);
    $_SESSION['details'] = $data['info'];
    $data['about'] = descripton::find(1);
    $_SESSION['description'] = $data['about'];
    return view('index',$data);
})->name('welcome');



  
Route::view('main','index');