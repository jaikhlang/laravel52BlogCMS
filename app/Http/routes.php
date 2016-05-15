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

Route::group(['middleware' => ['web']], function () {



    Route::resource('posts', 'PostsController');

    Route::get('/','PagesController@getIndex');
  
    Route::get('blog/{slug}', [ 'as' => 'blog.single', 'uses' => 'BlogController@getSingle']);
    Route::get('label/{id}', 'LabelsController@getIndex');

    Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@getIndex']);
    Route::get('label', 'LabelsController@getRedirect');


    //Auth Routes
    Route::auth();

	Route::get('admin', 'HomeController@index');
    
	
});


