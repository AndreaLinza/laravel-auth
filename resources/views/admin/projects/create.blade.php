@extends('layouts.app')

@section('title', 'Nuova Repo - Laravel')

@section('content')
    <div class="container">
        <h1>Nuova Repo</h1>

        @include('admin.projects.forms.upsert', [
            'action' => route('admin.projects.store'),
            'method' => 'POST',
            'project' => null
        ])
    </div>
@endsection