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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', "ContactUsController@show")->name('contact');
Route::post('/contact', "ContactUsController@send")->name('sendcontact');

Route::get('/creationArticle', "creationArticleController@show")->name('getAddArticle');
Route::post('/creationArticle', "creationArticleController@send")->name('postAddArticle');

Route::get('/produits', 'ArticleController@getProducts' )->name('product');

Route::get('/produit/{name}', 'ArticleController@showProduct');
