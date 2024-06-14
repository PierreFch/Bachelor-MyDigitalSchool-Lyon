@extends('layout')

@section('content')
    <div class="divPage divActualites-section edit">
        <div class="container">
            <h1>Modifier : {{ $section->name }}</h1>

            <form action="{{ route('section.update', $section) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-field">
                    <label for="title">Titre</label>
                    <input type="text" value="{{ $section->title }}" id="title" name="title">
                    @error ('title')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <label for="description">Description</label>
                    <textarea id="description" name="description">
                        {{ $section->description }}
                    </textarea>
                    @error ('description')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <label for="link">Lien</label>
                    <input type="text" value="{{ $section->link }}" id="link" name="link">
                    @error ('link')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <h2>Image</h2>
                <div class="input-field">
                    <label for="image">Image url</label>
                    <input type="text" id="image-url" name="image_url" value="{{ $section->image_url }}">
                    @error ('image_url')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <label for="image">Texte alternatif (SEO)</label>
                    <input type="text" id="image-alt" name="image_alt" value="{{ $section->image_alt }}">
                    @error ('image_alt')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <label for="image">Title (SEO)</label>
                    <input type="text" id="image-title" name="image_title" value="{{ $section->image_title }}">
                    @error ('image_title')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="submit">
                    <input type="submit" value="Modifier la section">
                </div>
            </form>
        </div>
    </div>
@endsection
