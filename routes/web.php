<?php

use App\Mail\NewUserWelcomeMail;

Auth::routes();

Route::get('/email', function (){
  return new NewUserWelcomeMail();
});

Route::post('follow/{user}', 'FollowsController@store');

Route::post('/p', 'PostsController@store');

Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
