@extends('project.shared.layout')
@section('title','Create New Project')


@section('content')

    <p>{{$errors->first('image')}}</p>
    <p>{{$errors->first('title')}}</p>
    <p>{{$errors->first('description')}}</p>
    <p>{{$errors->first('liveLink')}}</p>
    <p>{{$errors->first('githubLink')}}</p>

    <form action="{{url('admin/project')}}" method="post" enctype="multipart/form-data">
{{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
        {{-- {{ csrf_field() }} --}}

{{--        <input type="file" name="image"  />--}}
{{--        <input type="text" name="title" placeholder="Project Title" value="">--}}
{{--        <input type="text" name="description" value="" placeholder="Project Description">--}}
        <input type="text" name="liveLink" value="" placeholder="Live link">
        <input type="text" name="githubLink" value="" placeholder="Github link">
        <input name="projectTech[]" type="text" placeholder="Tech name">
        <input name="projectTech[]" type="text" value="" placeholder="Tech used">
        <input name="projectTech[]" type="text" value="" placeholder="Tech used">
        <input name="projectTech[]" type="text" value="" placeholder="Tech used">
        <input name="projectTech[]" type="text" value="" placeholder="Tech used">
        <input type="submit" name="" value="Submit" class="button">
    </form>

@endSection

