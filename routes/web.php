<?php

Route::get('/', function () {
    return view('index');
});


Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'auth'],function(){

    Route::get('project/{id}/delete', 'ProjectController@delete')->name('project.delete');
    Route::resource('project','ProjectController');

});
//Auth::routes();
//Route::get('/home', 'Auth\HomeController@index')->name('home');
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout')->name('logout');

// for contact form
Route::post('contact','ContactController@handler');
Route::get('test','ContactController@test');