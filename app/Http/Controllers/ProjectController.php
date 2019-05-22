<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectsTechnames;
use App\Techname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class ProjectController extends Controller
{

    public function index()
    {
        return view('project.index')->with('projects',Project::get());
    }


    public function create()
    {
        return view('project.form');
    }


    public function store(Request $request){
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


        $project = new Project();
        $project->title = $title;
        $project->description = $description;
        $project->githubLink = $githubLink;
        $project->liveLink = $liveLink;
        $project->imageName = $imageName;
        $project->save();

        foreach ($technames as $techname){
                $techname = Techname::create([
                    'techName' => $techname
                ]);

                $project->technames()->attach($techname);
//                $linkingTable = new ProjectsTechnames();
//                $linkingTable->project_id = $project_id;
//                $linkingTable->techname_id = $techname->id;
//                $linkingTable->save();
            }

        return redirect()->route('admin.project.index');
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



    public function delete($id)
    {
        return view('project.delete',['id'=>$id]);
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
