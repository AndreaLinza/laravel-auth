@extends('layouts.app')

@section('title', 'Nuova Repo - Laravel')

@section('content')
    <div class="container">
        <h1>Nuova Repo</h1>

        @include('admin/projects.partials.upsert', [
            'action' => route('admin.projects.store'),
            'method' => 'POST',
            'project' => null
        ])
    </div>
@endsection

{{-- <div class="container py-5">
    <form action="{{ route('comics.store') }}" method="POST" class="row g-3">
        @csrf()
        <div class="col-md-4">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"  value="{{old('series')}}">
            @error('series')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label class="form-label">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{old('type')}}">
            @error('type')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-md-12 mb-5">
            <label class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror"style="min-height: 100%" name="description">{{old('description')}}</textarea>
            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-12">
            <label class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" placeholder="Inserisci immagine" value="{{old('thumb')}}">
            @error('thumb')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-4">
            <label class="form-label">Prezzo</label>
            <input type="number" min="1" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price')}}">
            @error('price')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label class="form-label">Data di Vendita</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{old('sale_date')}}">
            @error('sale_date')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror 
        </div>

        <div class="col-12">
            <label class="form-label">Artisti</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists" value="{{old('artists')}}">
            @error('artists')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-12">
            <label class="form-label">Scrittori</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers" value="{{old('writers')}}">
            @error('writers')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-12">
            <button class="btn btn-primary">Aggiungi</button>
            <a href="{{route('comics.index')}}" class="btn btn-outline-secondary">Indietro</a>
        </div>
    </form>
</div> --}}