@extends('project.shared.layout')
@section('title','Edit Project')
@section('content')
    @parent

    <form action="{{route('admin.project.update',['id'=>$project->id])}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">

        <div class="inputFileContainer">
            <p class="error">{{$errors->first('image')}}</p>
            <input type="file" name="image" id="file" class="inputfile"  />
            <label for="file"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose Project Photo</span></label>

        </div>
        <!-- <input type="file" name="" value=""> -->
        <p class="error">{{$errors->first('title')}}</p>
        <input type="text"  value="{{$project->title }}" name="title" placeholder="Project Title">
        <p class="error">{{$errors->first('description')}}</p>
        <input type="text"  value="{{$project->description}}" name="description" placeholder="Project Description">
        <p class="error">{{$errors->first('liveLink')}}</p>
        <input type="text"  value="{{$project->liveLink}}" name="liveLink" placeholder="Live link">
        <p class="error">{{$errors->first('githubLink')}}</p>
        <input type="text"  value="{{$project->githubLink}}" name="githubLink" placeholder="Github link">
        <div id="project_tech_input_container">
            <button id="addTech" class="button" >Add Tech</button>
            @forelse($project->technames as $techname)
                <input class="tech"  name="projectTech[]"  value="{{$techname->techName}}"  type="text" placeholder="Tech name">
            @empty
                <input class="tech"  name="projectTech[]" type="text" placeholder="Tech name">
            @endforelse

        </div>
        <input type="submit" name="" value="Submit" class="button">
    </form>
@endSection