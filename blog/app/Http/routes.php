<?php


Route::group(['middleware' => ['web']],
    function(){
        Route::resource('posts', 'PostController');


        Route::get('contact', 'PagesController@getContact');


        Route::get('about', 'PagesController@getAbout');


        Route::get('/', 'PagesController@getIndex');
    }
);






