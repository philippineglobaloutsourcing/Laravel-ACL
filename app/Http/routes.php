<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


// Route::post('/api/users/assign/role', 'UserPivotApiController@assignRole');
Route::group(['prefix' => 'api'], function(){
	Route::get('user-data/{id}', 'IndexController@user');
	Route::get('user-id', 'UserPivotApiController@userId');
	Route::get('users/pivots', 'UserPivotApiController@index');
	Route::post('users/assign/role', 'UserPivotApiController@assignRole');
});

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});


Route::group(['middleware' => 'auth'], function () {
	Route::resource('posts', 'PostsController');
});


Route::get('users', function(){
	return \App\User::all();
});

Route::get('users/{id}', function($id){
	return \App\User::with('roles')->find(1);
});

Route::get('roles', function(){
	return \App\Permission::with('roles')->get();
});

Route::group(['prefix' => 'acl'], function(){

	Route::get('', 'UserPivotController@index');
	Route::get('users', 'UserPivotController@allUser');
	Route::get('users/{id}', ['as' => 'user.show', 'uses' => 'UserPivotController@show']);


});


