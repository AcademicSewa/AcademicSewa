<?php

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
    return view('welcome');
});


//admin
Auth::routes();
 Route::match(['get','post'], 'admin','AdminController@index');
 Route::get('admin','AdminController@index');

Route::post('admin/store','AdminController@store'); 
Route::group(['middleware' =>['admin']],function(){
    Route::get('admin/dashboard','AdminController@dashboard'); 
    // Route::get('admin/settings','AdminController@settings');
    Route::get('admin/viewpost','AdminPostController@display');
    Route::get('/admin/message','AdminController@display');
    Route::get('/admin/addpost','AdminPostController@add')->name('admin.posts.add_post');
Route::post('/addpost','AdminPostController@store')->name('addpost');
Route::get('delete/{id}','AdminPostController@delete')->name('admin.posts.delete');

   
});
   
Route::get('/logout','AdminController@logout');



Route::get('/logout','AdminController@logout');

//users
Route::get('dashboard','UserDashboardController@index');

Route::get('bit','UserDashboardController@bit');
Route::get('bca','UserDashboardController@bca');
Route::get('be','UserDashboardController@be');
Route::get('civil','UserDashboardController@civil');
//Route::get('dashboard','UserDashboardController@display');


Route::POST('/addmessage','MessageController@store')->name('addmessage');
Route::get('/message','MessageController@index')->name('user.userdashboard');

Route::get('/home', 'HomeController@index')->name('home');

