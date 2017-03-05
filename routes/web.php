<?php

Route::get('/', function () {
    $title = 'Home';
    return view('pages.home', compact('title'));
});

Route::get('news', 'PostsController@index');
Route::get('/news/{slug}', 'PostsController@show');

Route::get('servers', function () {
    $title = 'Game Servers';
    return view('pages.servers', compact('title'));
});
Route::get('about', function () {
    $title = 'About us';
    return view('pages.about', compact('title'));
});
Route::get('contact', function () {
    $title = 'Contact us';
    return view('pages.contact', compact('title'));
});

