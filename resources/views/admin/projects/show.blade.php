@extends('layouts.app')

@section('title', 'Repo - Show')

@section('content')

<div class="container">

    
    <div>{{$project->title}}</div>
    <img src="{{$project->thumb}}" alt="">
    <div>{{$project->description}}</div>
    <a href="{{url($project->link)}}">{{$project->link}}</a>
    <div>{{$project->release->format('d/m/y')}}</div>
    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>
    
</div>
@endsection
