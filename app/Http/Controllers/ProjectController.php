<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProjectController extends Controller
{

    public function index()
    {

       $projects = Project::first();

//        return $projects->techname;
//        return view('project.index');
    }


    public function create()
    {
        return view('project.form');
    }



    public function store(Request $request)
    {
        $rules =[
            'image'=>'required|max:1000',
            'title'=>'required',
            'description'=>'required'
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('admin.project.create')->withErrors($validator)->withInput();
        }



        //everything is valid, save into
            // all image files, will be stored inside public folder
        $imageName = $this->saveImageAndGetPath($request->image);
        $title = $request->input('title');
        $description = $request->input('description');
        $githubLink = $request->input('githubLink');
        $liveLink = $request->input('liveLink');
        $technames = $request->input('projectTech');

        $returnString = 'imageName: '.$imageName;
        $returnString .= 'title: '.$title;
        $returnString .= 'description: '.$description;
        $returnString .= 'githublink: '.$githubLink;
        $returnString .= 'liveLink: '.$liveLink;
        $returnString .= 'technames: '.var_dump($technames);
        return $returnString;
//        return $imageName;
    }


    public function show(Project $project)
    {

    }


    public function edit(Project $project)
    {
        //
    }


    public function update(Request $request, Project $project)
    {
        //
    }

    public function destroy(Project $project)
    {
        //
    }


    /******************* Helper functions
     *****************************************************/
    public function saveImageAndGetPath(UploadedFile $file){
        $filenameWithExt = $file->getClientOriginalName(); // get file name with extension
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME) ; // get only file name
        $extension = $file->getClientOriginalExtension(); // get only extension
        $newFileName = $filename . '_'.time().".".$extension; // this will unique new filename
        $newFile = $file->move('project_images/',$newFileName);
        return $newFile->getFilename();
    }
}
