@extends('layout')

@section('content')
    <div class="divPage divActualites edit">
        <div class="container">
            <h1>Modifier : {{ $news->name }}</h1>

            <form action="{{ route('news.update', $news) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-field">
                    <label for="title">Titre</label>
                    <input type="text" value="{{ $news->title }}" id="title" name="title">
                    @error ('title')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <label for="short-description">Description courte</label>
                    <textarea id="short-description" name="short_description">
                    {{ $news->short_description }}
                    </textarea>
                    @error ('short_description')
                    <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="submit">
                    <input type="submit" value="Modifier l'actualité">
                </div>
            </form>
        </div>
    </div>
@endsection
