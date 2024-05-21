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


Route::view('login','login')->name('login');
Route::post('adminlogin','logincontroller@login')->name('login.submit');

Route::group(['middleware' => ['auth']], function () {
    Route::view('admin','backend.index')->name('ownerarea');
    Route::get('logout','logincontroller@logout')->name('logout');
    /* manage Descriptions */
    Route::view('manageDescription','backend.layouts.edit_Description');
    Route::get('Description','wordsController@disp')->name('description.display');
    Route::get('editDescription/{id}','wordsController@edit')->name('description.edit');
    Route::post('update/{id}','wordsController@update')->name('description.update');
    /* Manage User */
    Route::get('user','usercontroller@disp')->name('user.display');
    Route::get('editUser/{id}','usercontroller@edit')->name('user.edit');
    Route::post('updateUser/{id}','usercontroller@update')->name('user.update');
    /* Langauge Skills */
    Route::view('addLanguage','backend.layouts.add_language')->name('language.create');
    Route::post('language_submit','languageController@create')->name('language.submit');

    Route::get('editlangauage/{id}','languageController@edit')->name('language.edit');
    Route::get('language','languageController@disp')->name('language.display');
    Route::post('updatelanguage/{id}','languageController@update')->name('language.update');
    Route::get('deletelanguage/{id}','languageController@delete')->name('language.delete');
    //change password
    Route::view('change','backend.layouts.change_password')->name('password.change');
    Route::post('updatepassword','logincontroller@updatepassword')->name('password.update');

    Route::view('backend','backend.master')->name('dashboard');

});