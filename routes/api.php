<?php

use Illuminate\Http\Request;

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


Route::get('projects',function(){
    $projectsData = [
        [
            "image" => "https://picsum.photos/520/320",
            "title" => "project title",
            "description" => "This is project description",
            "technologies" =>
                [
                    "Tect1","Tect2","Tect3","Tect4"
                ],
            "githubLink" => "https://www.github.com",
            "liveLink" => "https://www.google.com"
        ],
        [
            "image" => "https://picsum.photos/520/320",
            "title" => "project title",
            "description" => "This is project description",
            "technologies" =>
                [
                    "Tect1","Tect2","Tect3","Tect4"
                ],
            "githubLink" => "https://www.github.com",
            "liveLink" => "https://www.google.com"
        ],
        [
            "image" => "https://picsum.photos/520/320",
            "title" => "project title",
            "description" => "This is project description",
            "technologies" =>
                [
                    "Tect1","Tect2","Tect3","Tect4"
                ],
            "githubLink" => "https://www.github.com",
            "liveLink" => "https://www.google.com"
        ],
        [
            "image" => "https://picsum.photos/520/320",
            "title" => "project title",
            "description" => "This is project description",
            "technologies" =>
                [
                    "Tect1","Tect2","Tect3","Tect4"
                ],
            "githubLink" => "https://www.github.com",
            "liveLink" => "https://www.google.com"
        ],
        [
            "image" => "https://picsum.photos/520/320",
            "title" => "project title",
            "description" => "This is project description",
            "technologies" =>
                [
                    "Tect1","Tect2","Tect3","Tect4"
                ],
            "githubLink" => "https://www.github.com",
            "liveLink" => "https://www.google.com"
        ],
        [
            "image" => "https://picsum.photos/520/320",
            "title" => "project title",
            "description" => "This is project description",
            "technologies" =>
                [
                    "Tect1","Tect2","Tect3","Tect4"
                ],
            "githubLink" => "https://www.github.com",
            "liveLink" => "https://www.google.com"
        ],
        [
            "image" => "https://picsum.photos/520/320",
            "title" => "project title",
            "description" => "This is project description",
            "technologies" =>
                [
                    "Tect1","Tect2","Tect3","Tect4"
                ],
            "githubLink" => "https://www.github.com",
            "liveLink" => "https://www.google.com"
        ],
        [
            "image" => "https://picsum.photos/520/320",
            "title" => "project title",
            "description" => "This is project description",
            "technologies" =>
                [
                    "Tect1","Tect2","Tect3","Tect4"
                ],
            "githubLink" => "https://www.github.com",
            "liveLink" => "https://www.google.com"
        ],
        [
            "image" => "https://picsum.photos/520/320",
            "title" => "project title",
            "description" => "This is project description",
            "technologies" =>
                [
                    "Tect1","Tect2","Tect3","Tect4"
                ],
            "githubLink" => "https://www.github.com",
            "liveLink" => "https://www.google.com"
        ],
        [
            "image" => "https://picsum.photos/520/320",
            "title" => "project title",
            "description" => "This is project description",
            "technologies" =>
                [
                    "Tect1","Tect2","Tect3","Tect4"
                ],
            "githubLink" => "https://www.github.com",
            "liveLink" => "https://www.google.com"
        ]
    ];

    return response()->json($projectsData,200);
});