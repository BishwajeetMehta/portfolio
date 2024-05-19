<?php
use App\User;
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

    $data['info'] = User::find(1);
    $_SESSION['details'] = $data['info'];
    
    $data['about'] = descripton::find(1);
    $_SESSION['description'] = $data['about'];

    $data['User'] = User::all();
    return view('index',$data);
})->name('welcome');



Route::view('admin','backend.index')->name('ownerarea');
/* manage Descriptions */
Route::view('manageDescription','backend.layouts.edit_Description');
Route::get('Description','wordsController@disp')->name('description.display');
Route::get('editDescription/{id}','wordsController@edit')->name('description.edit');
Route::post('update/{id}','wordsController@update')->name('description.update');
/* Manage User */
Route::get('user','usercontroller@disp')->name('user.display');
Route::get('editUser/{id}','usercontroller@edit')->name('user.edit');
Route::post('updateUser/{id}','usercontroller@update')->name('user.update');



Route::view('backend','backend.master');