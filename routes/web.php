<?php

Route::get('/', 'PagesController@mainPage')->name('main');
Route::get('/author/{slug}', 'PagesController@author')->name('author');
Route::get('/post/{slug}', 'PagesController@post')->name('post');
Route::get('/posts', 'PagesController@posts')->name('posts');
Route::get('/article/{slug}', 'PagesController@article')->name('article');
Route::get('/articles', 'PagesController@articles')->name('articles');
Route::get('/videos', 'PagesController@videos')->name('videos');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/authors', 'PagesController@authors')->name('authors');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
