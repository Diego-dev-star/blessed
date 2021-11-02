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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//
//Route::get('/news/{id}/{slug}', 'News@Show')->name('news.show');
//Route::get('/job/{id}/{slug}', 'Job@show')->name('job.full');
Route::group([
    'prefix' => LaravelLocalization::setLocale()],
    function () {
        Route::get('/', 'Controller@Index')->name('HomePage');
       // Route::post('/', 'Controller@ContactForm');
        Route::post('/contact', 'Controller@SubForm')->name('contact.form');


        Route::get('/news', 'News@index')->name('News');
        Route::get('/news/{id}/{slug}', 'News@Show')->name('news.show');


//jobs roting

        Route::get('/job', 'Job@FrontJods')->name('Job-page');
        Route::get('/job/{id}/{slug}', 'Job@show')->name('job.show');
//contact
        Route::get('/contact', 'Contact@index')->name('contact');
        Route::post('/contact', 'Contact@ContactForm');

//smart search
        Route::get('search', 'SearchController@search');
        Route::get('autocomplete', 'SearchController@search');
//categories page
        Route::get('/categories', 'Category@Index')->name('Categories');
        Route::get('/categories/{id}', 'Category@Single')->name('category.show');
//about
        Route::get('/about', 'AboutPage@index')->name('Employers');
    });

Route::get('/', function () {
    return redirect(app()->getLocale());
});