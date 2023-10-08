@extends('layouts.app')

@section('title', 'Laravel - Index')

@section('content')
    <div class="container">

        <h1>Prova</h1>

        <div class="row row-cols-3">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <a class="nav-link" href="{{route('admin.projects.show', $project->id)}}">
                            <img src="{{ $project->thumb }}" class="card-img-top h-100" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">{{ $project->description }}</p>
                                <p class="card-text">{{ implode(', ', $project->language) }}</p>
                                <a href="{{ $project->link }}" class="">Link</a>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="py-5">
            <a class="btn btn-outline-success" style="margin-left:50%; transform:translateX(-50%)"
                href="{{ route('admin.projects.create') }}">
                Add Repo
            </a>
        </div>
    </div>
@endsection
