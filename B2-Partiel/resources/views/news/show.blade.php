@extends('layout')

@section('content')
    <div class="divPage divActualites show">
        <div class="container">
            <h1 class="text-center">{{ $news->title }}</h1>
            <div class="chapo">
                {{ $news->short_description }}
            </div>

            @if(Auth::user())
                <div class="actions">
                    <div class="add">
                        <a href="{{ route('section.create', $news) }}" title="Ajouter une section"
                           class="button blue">Ajouter une section</a>
                    </div>
                    <div class="edit">
                        <a href="{{ route('news.edit', $news) }}" title="Modifier l'actualité"
                           class="button blue">Modifier</a>
                    </div>
                    <div class="delete">
                        <form action="{{ route('news.destroy', $news) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" id="destroy" name="destroy" value="Supprimer"
                                   class="button danger">
                        </form>
                    </div>
                </div>
            @endif
            <div class="description">
                @foreach($news->section as $section)
                <section>
                    <div class="content">
                        <h2>{{ $section->title }}</h2>
                        <p>
                            {{ $section->description }}
                        </p>
                    </div>
                    @if($section->image_url)
                        <div class="picture text-center">
                            <img src="{{ $section->image_url }}" alt="{{ $section->image_alt }}" title="{{ $section->image_title }}">
                        </div>
                    @endif
                    @if(Auth::user())
                        <div class="actions">
                        <div class="edit">
                            <a href="{{ route('section.edit', $section) }}" title="Modifier la section"
                               class="button blue">Modifier</a>
                        </div>
                        <div class="delete">
                            <form action="{{ route('section.destroy', $section) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" id="destroy" name="destroy" value="Supprimer"
                                       class="button danger">
                            </form>
                        </div>
                    </div>
                    @endif
                </section>
            @endforeach
            @if($section->link)
                <div class="bottom text-center">
                    <a href="{{ $section->link }}" class="button">Voir le second article</a>
                </div>
            @endif
            </div>
        </div>
    </div>
@endsection
