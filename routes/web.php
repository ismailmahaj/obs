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

Route::get('send', 'MailController@send');

Route::get('/', [
    "uses" => "UsersController@index",
    "as" => "pages.index",
]);

Route::get('/photos', [
    "uses" => "UploadController@store",
    "as" => "photos",
]);

Route::post('/inscription', [
    'uses' => 'SubscribersController@store',
    'as' => 'subscribe',
]);

Route::post('/contact', [
    'uses' => 'ContactController@store',
    'as' => 'contact',
]);

Route::group(['middleware' => 'auth'], function () {


    Route::get('/videos', [
        "uses" => 'VideosController@index',
        "as" => 'videos.index',       
    ]);
   Route::get('/videos/create', [
       "uses" => 'VideosController@create',
       "as" => 'videos.create',
   ]);
   Route::post('/videos/store', [
       "uses" => 'VideosController@store',
       "as" => 'videos.store',
   ]);
   Route::get('/videos/{id}', [
       "uses" => 'VideosController@show',
       "as" => 'videos.show',
   ]);
   Route::get('/videos/{id}/edit', [
       "uses" => 'VideosController@edit',
       "as" => 'videos.edit',
   ]);
   Route::get('/videos/{id}/remove', [
       "uses" => 'VideosController@destroy',
       "as" => 'videos.destroy',
   ]);

});

Route::post('/videos', [
    "uses" => "VideosController@store",
    "as" => "videos",
    
]);
// Route::get('/videos', [
//     "uses" => "VideosController@index",
//     "as" => "videos.index",
// ]);
//   Route::post('upload', 'VideosController@store');
//    Route::resource('/videos', 'VideosController');



Route::get('admin/newsletter', function () {
    return view('admin.csv');
});

Route::get('admin/generate_csv', [
    'uses' => 'SubscribersController@generate_csv',
    'as' => 'admin.generate_csv',
]);

Route::get('/articles', ['as' => 'articles', function () {
    return view('pages/articles');
}]);

//  route admin
Route::group(['middleware' => 'auth'], function () {
//     Route::get('/admin', 'AdminController@getDashboard');
    Route::get('/admin/export', 'AdminController@export');
//     Route::get('/admin/membre', 'AdminController@addMember');
//     Route::post('/admin/membre', 'AdminController@storeMember');
//     Route::post('/admin/membre/search', 'AdminController@search');
//     Route::get('/admin/membres', 'AdminController@getMembers');
//     Route::get('/admin/membre/{membre}', 'AdminController@showMember');
//     Route::get('/admin/membre/edit/{membre}', 'AdminController@editMember');
//     Route::post('/admin/membre/edit/{membre}', 'AdminController@updateMember');
//     Route::get('/admin/membre/remove/{membre}', 'AdminController@destroy');
//     Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});
Route::group(['middleware' => 'auth'], function () {
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


// Route::group(['prefix' => 'admin'], function () {
    //     Voyager::routes();
    // });


    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/posts', 'PostController');
    Route::post('/upload-image', [
        'uses' => 'UploadController@store',
        'as' => 'upload.store'
    ]);
});
Route::post('switchlang/{lang}', ['as'=>'lang.switch', 'uses'=>'TranslationController@switchLang']);
Route::get('switchlang/{lang}', ['as'=>'lang.switch', 'uses'=>'TranslationController@switchLang']);

/*  UPLOAD PHOTO ROUTE   */

/* Confirmation e-mail (Ismail à verifier)   */
// Route::get('/confirm/{token}', function ($token) {
//   $user = User::whereConfirmationToken($token)->firstOrFail();
//   $user->confirmed_at = now();
/* Nous devrions également définir le paramètre confirmation_token sur null */
//   $user->confirmation_token = null;
//   $user->save();
//   return view('confirmed');
// });

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


//  langue 