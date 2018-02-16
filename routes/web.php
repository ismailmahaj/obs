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

// Route::get('send', 'MailController@send');
Route::get('emails/send', 'ContactController@send');
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

Route::get('/photos', [
    'uses' => 'UploadController@galerie',
    'as' => 'photos', function () {
    return view('pages.photos');
}]);

Route::get('/galerie_videos', [
    'uses' => 'VideosController@galerie',
    'as' => 'galerie_videos', function () {
    return view('pages.galerie_videos');
}]);



/*        MIDDLEWARE -> DROIT AUTH (USER)                 */
Route::group(['middleware' => 'auth'], function () {

 /*         ROUTE UPLOAD VIDEO SEULE       */

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
   Route::delete('/videos/{id}/remove', [
       "uses" => 'VideosController@destroy',
       "as" => 'videos.destroy',
   ]);

   /*         ROUTE UPLOAD IMAGE SEULE       */

    Route::get('/galerieimg', [
        "uses" => 'UploadController@index',
        "as" => 'galerieimg.index',       
    ]);
   Route::get('/galerieimg/create', [
       "uses" => 'UploadController@create',
       "as" => 'galerieimg.create',
   ]);
   Route::post('/galerieimg/store', [
       "uses" => 'UploadController@store',
       "as" => 'galerieimg.store',
   ]);
   Route::get('/galerieimg/{id}', [
       "uses" => 'UploadController@show',
       "as" => 'galerieimg.show',
   ]);

   Route::get('/galerieimg/{id}/edit', [
       "uses" => 'UploadController@edit',
       "as" => 'galerieimg.edit',
   ]);

   Route::put('/galerieimg/{id}', [
       'uses' => 'UploadController@update',
       'as' => 'galerieimg.update',
   ]);
   Route::delete('/galerieimg/remove/{id}', [
       "uses" => 'UploadController@destroy',
       "as" => 'galerieimg.destroy',
   ]);


});






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
    Auth::routes();
Route::group(['middleware' => 'auth'], function () {
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

Route::get('addmoney/stripe', array('as' => 'addmoney.paywithstripe','uses' => 'AddMoneyController@payWithStripe'));
Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'AddMoneyController@postPaymentWithStripe'));

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


//  langue 