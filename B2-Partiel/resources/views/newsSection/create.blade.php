@extends('layout')

@section('content')
    <div class="divPage divActualites-section create">
        <div class="container">
            <h1>Ajouter une section</h1>
            <form action="{{ route('section.store', $news) }}" method="POST">
                @csrf

                <div class="input-field">
                    <label for="title">Titre</label>
                    <input type="text" value="{{ old('title') }}" id="title" name="title">
                    @error ('title')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <label for="description">Description</label>
                    <textarea id="description" name="description">
                        {{ old('description') }}
                    </textarea>
                    @error ('description')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <label for="link">Lien</label>
                    <input type="text" value="{{ old('link') }}" id="link" name="link">
                    @error ('link')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <h2>Image</h2>
                <div class="input-field">
                    <label for="image">Image url</label>
                    <input type="text" id="image-url" name="image_url" value="{{ old('image_url') }}">
                    @error ('image_url')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <label for="image">Texte alternatif (SEO)</label>
                    <input type="text" id="image-alt" name="image_alt" value="{{ old('image_alt') }}">
                    @error ('image_alt')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <label for="image">Title (SEO)</label>
                    <input type="text" id="image-title" name="image_title" value="{{ old('image_title') }}">
                    @error ('image_title')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>

                <div class="submit">
                    <input type="submit" value="Ajouter la section">
                </div>
            </form>
        </div>
    </div>
@endsection
