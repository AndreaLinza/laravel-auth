@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Non c'è un cazzo coglione</h1>

        @foreach ($projects as $project)
            <div class="card" style="width: 18rem;">
                <img src="{{$project->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <p class="card-text">{{$project->description}}</p>
                    <p class="card-text">{{implode(', ', $project->language)}}</p>
                    <a href="{{$project->link}}" class="btn btn-primary">Link</a>
                </div>
            </div>
        @endforeach

        <a class="btn btn-outline-success" href="{{ route('admin.projects.create') }}">
            Add Repo
        </a>
    </div>
@endsection
