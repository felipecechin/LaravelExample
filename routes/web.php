<?php



Route::get('/tasks','TasksController@index');

Route::get('/tasks/{task}','TasksController@show');

Route::get('/','PostsController@index')->name('home');

Route::get('/posts/create','PostsController@create');

Route::get('/posts/{post}','PostsController@show');

Route::post('/posts','PostsController@store');


Route::get('/posts/tags/{tag}','TagsController@index');


Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionController@create');

Route::post('/login','SessionController@store');

Route::get('/logout','SessionController@destroy');