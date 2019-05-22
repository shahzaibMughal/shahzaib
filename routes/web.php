<?php


Route::get('/', function () {
    return view('index');
});


Route::group(['prefix'=>'admin','as'=>'admin.'],function(){

    Route::resource('project','ProjectController');

});