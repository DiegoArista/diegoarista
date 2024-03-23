<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WelcomeController@index');

Route::get('/ubicacion', function () {
    return view('ubicacion');
});

// Route::get('/post', function(){

//     return view('post');
// });

Route::get('/flora', function(){

    return view('flora');
});
Route::get('/fauna', function(){

    return view('fauna');
});
Route::get('/clima', function(){

    return view('clima');
});
Route::get('/religion',function(){
    return view('religion');
});
Route::get('/danza', function(){

    return view('danza');
});
Route::get('/gastronomia', function(){
    return view('gastronomia');
});

Route::get('/politica-privacidad', function(){
    return view('politica-privacidad');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'SearchController@show')->name('search');
Route::get('/blog', 'Blog\PageController@blog')->name('blog');
Route::get('/blog/post/{slug}', 'Blog\PageController@post')->name('post');
Route::get('/blog/categorias/{slug}', 'Blog\PageController@category')->name('categorias');
Route::get('/blog/etiquetas/{slug}', 'Blog\PageController@tag')->name('etiquetas');
//rutas admin
Route::resource('tags', 'admin\TagController');
Route::resource('tags/{id}/edit', 'admin\TagController');


Route::resource('categories', 'admin\CategoryController');
Route::resource('posts', 'admin\PostController');

Route::resource('posts/{id}/edit', 'admin\PostController');




Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
Route::post('welcome/subscriptor', 'admin\SubscriptorController@store');
