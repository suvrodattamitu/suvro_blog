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
use App\Http;

Route::group(['middleware' => ['web']] ,function(){

		route::auth();
		
		$this->get('auth/login', 'Auth\LoginController@showLoginForm')->name('login');
		$this->post('auth/login', 'Auth\LoginController@login');

		Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
		Route::post('auth/register', 'Auth\RegisterController@register');
		
		$this->get('auth/logout', 'Auth\LoginController@logout')->name('logout');
		

		Route::get('blog/{slug}', ['as' => 'blog.single','uses' => 
			'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');

		Route::get('blog',['uses' => 'BlogController@getIndex','as' => 'blog.index']);

		Route::get('contact','PagesController@getContact');
		Route::post('contact','PagesController@postContact');

		Route::get('about','PagesController@getAbout');

		Route::get('/','PagesController@getIndex');

		Route::resource('posts','PostController');

});

