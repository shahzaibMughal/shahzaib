@extends('project.shared.layout')
@section('title','Projects')
@section('content')
    @parent
    <a class="button addBtn" href="{{ route('admin.project.create') }}">Add New</a>
    <table>
        <tbody>
        @foreach($projects as $project)
            <tr>
                <td>{{$project->title}}</td>
                <td><a href="{{ route('admin.project.edit',['id'=>$project->id]) }}">Edit</a></td>
                <td><a href="{{ route('admin.project.delete',['id'=>$project->id]) }}">Delete</a></td>
            </tr>
        @endforeach
                {{--        <tr>--}}
                {{--            <td>Project Title</td>--}}
                {{--            <td><a href="#">Edit</a></td>--}}
                {{--            <td><a href="#">Delete</a></td>--}}
                {{--        </tr>--}}
        </tbody>
    </table>
@endSection