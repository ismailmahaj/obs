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

Route::get('/', [
    "uses" => "UsersController@index",
    "as" => "pages.index"
]);

Route::get('/photos', [
    "uses" => "UsersController@show_photos",
    "as" => "photos"
]);

Route::post('/inscription', [
    'uses' => 'SubscribersController@store',
    'as' => 'subscribe'
]);

Route::post('/contact', [
    'uses' => 'ContactController@store',
    'as' => 'contact'
]);

Route::get('/videos', [
    "uses" => "VideosController@index",
    "as" => "videos"
]);

Route::get('admin/newsletter', function(){
    return view('admin.csv');
});

Route::get('admin/generate_csv', [
    'uses' => 'SubscribersController@generate_csv',
    'as' => 'admin.generate_csv'
]);

Route::get('/articles', ['as' => 'articles', function () {
    return view('pages/articles');
}]);

//  route admin
// Route::group(['middleware' => 'auth'], function () {
// 	Route::get('/admin', 'AdminController@getDashboard');
// 	Route::get('/admin/export', 'AdminController@export');
// 	Route::get('/admin/membre', 'AdminController@addMember');
// 	Route::post('/admin/membre', 'AdminController@storeMember');
// 	Route::post('/admin/membre/search', 'AdminController@search');
// 	Route::get('/admin/membres', 'AdminController@getMembers');
// 	Route::get('/admin/membre/{membre}', 'AdminController@showMember');
// 	Route::get('/admin/membre/edit/{membre}', 'AdminController@editMember');
// 	Route::post('/admin/membre/edit/{membre}', 'AdminController@updateMember');
// 	Route::get('/admin/membre/remove/{membre}', 'AdminController@destroy');
// 	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
// });

Auth::routes();
Route::post('/storeMember', 'StaticViewsController@storeMember');

Route::get('/biographie', ['as' => 'biographie', function () {
    return view('pages/bio');
}]);

Route::get('/evenements', ['as' => 'evenements', function () {
    return view('pages/evenements');
}]);

Route::get('/galerie-videos', ['as' => 'galerie-videos', function () {
    return view('pages/galerie-videos');
}]);

Route::post('changelocale', ['as' => 'changelocale', 'uses' => 'TranslationController@changeLocale']);

// Route::group(['prefix' => 'admin'], function () {
    //     Voyager::routes();
    // });
    
    
    Auth::routes();
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');