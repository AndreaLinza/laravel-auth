@extends('layouts.app')

@section('title', 'Repo - Show')

@section('content')

<div class="container">

    
    <div>{{$project->title}}</div>
    <img src="{{$project->thumb}}" alt="">
    <div>{{$project->description}}</div>
    <a href="/">{{$project->link}}</a>
    <div>{{$project->release->format('d/m/y')}}</div>
    
</div>
@endsection
