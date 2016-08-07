<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.index');
});

Route::get('/how-to', ['as' => 'howto', function () {
    return view('help.index');
}]);

Route::get('/contact-us', ['as' => 'contacts', function () {
    return view('contact.index');
}]);

Route::get('/blog', ['as' => 'blog', function () {
    return view('blog.index');
}]);

Route::get('/faq', ['as' => 'faq', function () {
    return view('faq.index');
}]);

Route::auth();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/buy-bitcoins', ['as' => 'buy', 'uses' => 'BuyController@index']);
});
