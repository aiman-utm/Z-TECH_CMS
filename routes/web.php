<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'root', 'uses' => 'PageController@getHome']);
Route::get('/aboutus', ['as' => 'index', 'uses' => 'PageController@getAboutUs']);
Route::get('/articles', ['as' => 'index', 'uses' => 'PageController@getIndex']);
Route::get('a/{aSlug}', ['as' => 'article', 'uses' => 'PageController@getArticle']);
Route::get('p/{pSlug}', ['as' => 'page', 'uses' => 'PageController@getPage']);
Route::get('c/{cSlug}', ['as' => 'category', 'uses' => 'PageController@getCategory']);
Route::get('sitemap.xml', ['as' => 'sitemap', 'uses' => 'PageController@getSitemap']);
