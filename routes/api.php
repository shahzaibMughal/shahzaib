<?php

use Illuminate\Http\Request;
use App\Project;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//
//Route::get('test',function(){
//
//    $projectsData = Project::with('technames')->get();
////    $projectsData = Project::with('technames')->pluck('title');
//
//
//
//    return response()->json($projectsData,200);
//
//});

Route::get('projects',function(){

    $projectsData = Project::with('technames')->get();
    return response()->json($projectsData,200);
});