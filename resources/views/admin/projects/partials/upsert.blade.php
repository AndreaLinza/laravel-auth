<form action="{{ $action }}" method="POST">
    @csrf()
    @method($method)

    <div class="mb-3">
        <label for="title">Titolo Repo</label>
        <input type="text" name="title" value="{{ old('title', $project?->title) }}" class="form-control" id="title"
            placeholder="Inserisci il titolo">
        @error('title')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description">Descrizione</label>
        <textarea name="description" class="form-control" id="description" placeholder="Inserisci la descrizione">{{ old('description', $project?->description) }}</textarea>
        @error('description')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="thumb">Immagine</label>
        <input type="text" name="thumb" value="{{ old('thumb', $project?->thumb) }}" class="form-control"
            id="thumb" placeholder="Inserisci il titolo">
        @error('thumb')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="release">Data Rilascio</label>
        <input type="date" name="release" value="{{ old('release', $project?->release->format('Y-m-d')) }}"
            class="form-control" id="release" placeholder="Inserisci il titolo">
        @error('release')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="link">Link</label>
        <input type="text" name="link" value="{{ old('link', $project?->link) }}" class="form-control"
            id="link" placeholder="Inserisci il titolo">
        @error('link')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="language">Linguaggi</label>
        <input type="text" name="language" value="{{ old('language', implode(', ', $project?->language ?? [])) }}"
            class="form-control" id="language" placeholder="Inserisci il titolo">
        @error('language')
            <div class="invalid_feedback">{{ $message }}</div>
        @enderror
    </div>



    <button class="btn btn-primary">Salva</button>

</form>
