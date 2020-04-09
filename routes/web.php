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
    return view('web-front/home');
})->name("home");

Route::get('/subscription-plan',function(){
    return view('web-front/subscription-plan');
})->name('subscription-plan');

Route::get('/blog',function(){
    return view('web-front/blog');
})->name('blog');

Route::get('/services', function() {
    return view('web-front/services');
})->name('services');


Route::get('/about', function() {
    return view('web-front/about-us');
})->name('about');


Route::get('/faq', function() {
    return view('web-front/faq');
})->name('faq');

Route::get('/team', function() {
    return view('web-front/team');
})->name('team');


Route::get('/celebs', function() {
    return view('web-front/celebs');
})->name('celebs');

Route::get('/contact-frm', function() {
    return view('web-front/contact-frm');
})->name('contact-frm');


Route::get('/custom-page','CustomPages@index');



/**AUTHENTICATION ROUTES */
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/add-page','CustomPageController@index')->name('add-page');
