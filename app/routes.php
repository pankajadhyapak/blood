<?php
Route::get('test',function(){

});
Route::get('/', ['as' => 'home' ,'uses'=>'PageController@index']);
Route::get('about', ['as' => 'about' ,'uses'=>'PageController@about']);
Route::get('faqs', ['as' => 'faqs' ,'uses'=>'PageController@faqs']);
Route::get('contact', ['as' => 'contact' ,'uses'=>'PageController@contact']);
Route::get('feed-back', ['as' => 'feedback' ,'uses'=>'PageController@feedback']);
Route::get('join','DonorsController@create');
Route::post('join','DonorsController@store');
Route::get('login','DonorsController@login');
Route::post('login','DonorsController@dologin');
Route::get('logout','DonorsController@logout');
Route::resource('donors', 'DonorsController');
Route::get('profile','AdminController@profile');
Route::get('setting','AdminController@profile');
Route::get('requests','AdminController@profile');
Route::get('requests/{id}','AdminController@Showprofile');
Route::post('sendrequest','DonorsController@sendRequest');
App::missing(function($exception)
{
    return View::make('hello');
});


Route::resource('messages', 'MessagesController');

//Event::listen('illuminate.query',function($q){
//    echo ($q);
//});
