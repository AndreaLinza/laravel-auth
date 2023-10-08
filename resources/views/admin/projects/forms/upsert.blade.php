<form action="{{ $action }}" method="POST">
    @csrf()
    @method($method)

    <div class="mb-3">
        <label for="title">Titolo Repo</label>
        <input type="text" name="title" value="{{ old('title', $project?->title) }}" class="form-control @error('title') is-invalid @enderror" id="title"
            placeholder="Inserisci il titolo">
        @error('title')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description">Descrizione</label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Inserisci la descrizione">{{ old('description', $project?->description) }}</textarea>
        @error('description')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="thumb">Immagine</label>
        <input type="text" name="thumb" value="{{ old('thumb', $project?->thumb) }}" class="form-control @error('thumb') is-invalid @enderror"
            id="thumb" placeholder="Inserisci il link dell'immagine">
        @error('thumb')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="release">Data Rilascio</label>
        <input type="date" name="release" value="{{ old('release', $project?->release->format('Y-m-d')) }}"
            class="form-control @error('release') is-invalid @enderror" id="release" placeholder="Inserisci il titolo">
        @error('release')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="link">Link</label>
        <input type="text" name="link" value="{{ old('link', $project?->link) }}" class="form-control @error('link') is-invalid @enderror"
            id="link" placeholder="Inserisci il link della repo">
        @error('link')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="language">Linguaggi</label>
        <input type="text" name="language" value="{{ old('language', implode(', ', $project?->language ?? [])) }}"
            class="form-control @error('language') is-invalid @enderror" id="language" placeholder="Inserisci i linguaggi conosciuti">
        @error('language')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>



    <button class="btn btn-primary">Salva</button>
    <a class="btn btn-primary" href="/admin/projects">Indietro</a>

</form>
