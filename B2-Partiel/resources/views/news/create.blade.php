@extends('layout')

@section('content')
    <div class="divPage divActualites create">
        <div class="container">
            <h1>Ajouter une actualité</h1>
            <form action="{{ route('news.store') }}" method="POST">
                @csrf

                <div class="input-field">
                    <label for="title">Titre</label>
                    <input type="text" value="{{ old('title') }}" id="title" name="title">
                    @error ('title')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <label for="short-description">Description courte</label>
                    <textarea id="short-description" name="short_description">
                        {{ old('short_description') }}
                    </textarea>
                    @error ('short_description')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>

                <div class="submit">
                    <input type="submit" value="Ajouter l'actualité">
                </div>
            </form>
        </div>
    </div>
@endsection
