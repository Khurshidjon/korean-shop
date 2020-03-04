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

Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('/about', 'FrontendController@about')->name('frontend.about');
Route::get('/blog', 'FrontendController@blog')->name('frontend.blog');
Route::get('/single-blog', 'FrontendController@singleBlog')->name('frontend.single-blog');
Route::get('/cart', 'FrontendController@cart')->name('frontend.cart');
Route::get('/checkout', 'FrontendController@checkout')->name('frontend.checkout');
Route::get('/contact', 'FrontendController@contact')->name('frontend.contact');
Route::get('/product-single', 'FrontendController@singleProduct')->name('frontend.single-product');
Route::get('/shop', 'FrontendController@shop')->name('frontend.shop');
Route::get('/wishlist', 'FrontendController@wishlist')->name('frontend.wishlist');

//Auth::routes();

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
    Auth::routes();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

