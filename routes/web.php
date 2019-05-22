<?php


Route::get('/', function () {
    return view('index');
});


Route::group(['prefix'=>'admin','as'=>'admin.'],function(){

    Route::get('project/{id}/delete', 'ProjectController@delete')->name('project.delete');
    Route::resource('project','ProjectController');

});