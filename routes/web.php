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

//HOME
Route::get('/home', function () {return view('home');})->name('home');
Route::redirect('/', '/home');

//CONTACT
Route::get('/contact', "ContactUsController@show")->name('contact');
Route::post('/contact', "ContactUsController@send")->name('sendcontact');


//PRODUIT
Route::get('/produits', 'ArticleController@getProducts' )->name('product');
Route::get('/produit/{id}', 'ArticleController@showProduct');

//ARTICLE
Route::get('/articles', 'BlogController@getArticles')->name('articles');
Route::get('/articles/{id}', 'BlogController@showArticle');
Route::post('/addcomment', 'BlogController@addComment')->middleware('auth')->name("addcomment");

Auth::routes();

//SI ON EST CONNECTER
Route::group(['middleware' => ['auth']], function () {

    //PROFIL
    Route::get('/profil', 'ProfilController@show')->name('profil');
    Route::post('/profil', 'ProfilController@update')->name('updateprofil');

    //ADMIN
    Route::get('/admin', 'AdminController@getArticle')->name('admin');
    //supprime article
    Route::get('delete/{id}', 'AdminController@deleteArticle');
    //création d'article
    Route::get('/creationArticle', "CreationArticleController@show")->name('getAddArticle');
    Route::post('/creationArticle', "CreationArticleController@send")->name('postAddArticle');
    
});


