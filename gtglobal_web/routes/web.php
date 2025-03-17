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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('archite/about');
});

Route::get('/blog', function () {
    $articles = DB::select("SELECT * FROM articles");
    return view('archite/blog', compact('articles'));
});

Route::get('/blogDetails', function () {
    return view('archite/blogDetails');
});

Route::get('/contact', function () {
    return view('archite/contact');
});

Route::get('/index', function () {
    return view('archite/index');
});

Route::get('/index-2', function () {
    return view('archite/index-2');
});

Route::get('/index-3', function () {
    return view('archite/index3');
});

Route::get('/portfolio', function () {
    return view('archite/portfolio');
});

Route::get('/portfolioDetails', function () {
    return view('archite/portfolioDetails');
});

Route::get('/projects', function () {
    return view('archite/projects');
});

Route::get('/services', function () {
    return view('archite/services');
});

Route::get('/servicesDetails', function () {
    return view('archite/servicesDetails');
});

Route::get('/team', function () {
    return view('archite/team');
});

Route::get('/teamDetails', function () {
    return view('archite/teamDetails');
});
Route::get('/technology/a-params', function () {
    return view('technology/a-params');
});

Route::get('/technology/blog-single', function () {
    return view('technology/blog-single');
});

Route::get('/technology/blog', function () {
    return view('technology/blog');
});

Route::get('/technology/contact', function () {
    return view('technology/contact');
});

Route::get('/technology/e', function () {
    return view('technology/e');
});

Route::get('/technology/home-2', function () {
    return view('technology/home-2');
});

Route::get('/technology/home-3', function () {
    return view('technology/home-3');
});

Route::get('/technology/index-2', function () {
    return view('technology/index-2');
});

Route::get('/technology/index', function () {
    return view('technology/index');
});
