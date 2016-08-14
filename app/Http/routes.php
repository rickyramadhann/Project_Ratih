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
    return view('welcome');
});

Route::auth();
// admin Routes
Route::get('/adminpost', 'AdminPostController@adminpost');
Route::get('/AdminAllArtikel', 'AdminAllArtikelController@AdminAllArtikel');
Route::get('/hapus/{id}', 'hapusController@hapus');




Route::get('/home', 'HomeController@index');

Route::get('/Category', 'CategoryController@Category');
Route::get('/ReadArticle/{Id}', 'ReadArticleController@ReadArticle');
Route::get('/Gallery', 'GalleryController@Gallery');
Route::get('/About', 'AboutController@About');
Route::get('/Contact', 'ContactController@contact');

Route::post('/SimpanCategory', 'CategoryController@simpan');
