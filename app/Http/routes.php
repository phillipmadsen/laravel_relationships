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

Route::get('/', [
	'uses' => 'HomeController@getData',
	'as' => 'home',
]);

Route::get('/user/{username}', [
	'uses' => 'UserController@getUser',
	'as' => 'user.index',
]);

Route::get('/article/{article_id}', [
	'uses' => 'ArticleController@getArticles',
	'as' => 'article.index',
]);

Route::get('/article/country/{country_id}', [
	'uses' => 'ArticleController@getArticleFromCountry',

]);

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
    //
});
