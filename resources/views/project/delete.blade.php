@extends('project.shared.layout')
@section('title','Are you Sure?')
@section('content')
    @parent
    <form action="{{route('admin.project.destroy',['id'=>$id])}}" method="post" >
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <a href="{{route('admin.project.index')}}" class="button cancel"> Cancel</a>
        <input type="submit" name="" value="Delete" class="button delete">
    </form>

@endSection