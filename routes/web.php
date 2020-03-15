<?php

use App\Http\Controllers\postscontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@mainpage');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin/{id}', 'HomeController@admin')->name('admin.page');
//โปรไฟล์
Route::get('/profile/user/{user}', 'controllerprofile@profile')->name('profile.user');
Route::get('/profile/{user}/edit', 'controllerprofile@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'controllerprofile@update')->name('profile.update');

//โพสต์ขาย
Route::get('post/create/{user}','postscontroller@create')->name('post.create');
Route::post('post','postscontroller@store');
Route::get('delete/post/{id}','postscontroller@deletepost')->name('post.delete');
//โชว์รูป
Route::get('post/showimage/{id}','imagecontroller@show')->name('image.show');
Route::post('post/save/discripsion','discriptioncontroller@save')->name('discripsion.save');
Route::get('photo/delete/{id}','postscontroller@deletephoto')->name('photo.delete');
Route::get('delete/all/{id}','postscontroller@deleteall')->name('all.delete');
Route::get('delete/all/post/{id}','postscontroller@deleteallpost')->name('delete.post');
//โชว์รูปของโพสต์ทั้งหมดที่โพสต์
Route::get('post/{post}','postscontroller@seepost')->name('see.post');
