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

Route::get('/home', function () {return view('home');})->name('home');
Route::redirect('/', '/home');

Route::get('/contact', "ContactUsController@show")->name('contact');
Route::post('/contact', "ContactUsController@send")->name('sendcontact');

Route::get('/creationArticle', "CreationArticleController@show")->name('getAddArticle');
Route::post('/creationArticle', "CreationArticleController@send")->name('postAddArticle');

Route::get('/produits', 'ArticleController@getProducts' )->name('product');

Route::get('/produit/{id}', 'ArticleController@showProduct');

Route::get('/articles', 'BlogController@getArticles')->name('articles');
Route::get('/articles/{id}', 'BlogController@showArticle');
Route::post('/addcomment', 'BlogController@addComment')->middleware('auth')->name("addcomment");

Route::get('/profil', 'ProfilController@show')->middleware('auth')->name('profil');
Route::post('/profil', 'ProfilController@update')->middleware('auth')->name('updateprofil');

Auth::routes();
Route::get('/admin', 'AdminController@getArticle')->name('admin');
Route::get('delete/{id}', 'AdminController@deleteArticle');
