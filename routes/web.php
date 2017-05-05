<?php


Route::resource('articles', 'ArticlesController');

Route::get('/', 'ArticlesController@index');


Route::get('/profile', 'StaticsController@profile')->name('profile');

//Route::post('/login', 'SessionsController@login');

//Route::put('/password-reset/{id}', 'SessionsController@password_reset');

//Route::delete('/remove-baned', 'SessionsController@remove_baned');

Route::resource('/articles', 'ArticlesController', ['only'=>['index']]);

Route::resource('/articles', 'ArticlesController', ['except'=>['index', 'show', 'destroy']]);

Route::group(['middleware' => 'auth'], function () {

Route::resource('articles', 'ArticlesController', ['create', 'store']);
});
  
Route::group(['namespace' => 'Admin'], function() {

Route::resource('articles', 'ArticlesController');

});

Route::get('/', function(){
		return view('welcome');
});

Route::resource('comments', 'CommentsController');



Route::resource('articles', 'ArticlesController');

Route::get('/', 'ArticlesController@index')->name('root');

Route::resource('comments', 'CommentsController');

//Route::get('importExport', 'MaatwebsiteDemoController@importExport')->name('maatweb');

//Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel')->name('export');

//Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');

//Route::get('signup', 'UsersController@signup')->name('signup');

//Route::post('signup', 'UsersController@signup_store')->name('signup.store');

//Route::get('login', 'SessionsController@login')->name('login');

//Route::post('login', 'SessionsController@login_store')->name('login.store');

//Route::get('logout', 'SessionsController@logout')->name('logout');

//this routes for check if email user is exist in database

//Route::get('forgot-password', 'ReminderController@create')->name('reminders.create');

//Route::post('forgot-password', 'ReminderController@store')->name('reminders.store');

//this routes for handle changes password

//Route::get('reset-password/{id}/{token}', 'ReminderController@edit')->name('reminders.edit');

//Route::post('reset-password/{id}/{token}', 'ReminderController@update')->name('reminders.update');
  