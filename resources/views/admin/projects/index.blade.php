@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Non c'è un cazzo coglione</h1>

        <a class="btn btn-outline-success" href="{{ route('admin.projects.create') }}">
            Add Repo
        </a>
    </div>
@endsection
