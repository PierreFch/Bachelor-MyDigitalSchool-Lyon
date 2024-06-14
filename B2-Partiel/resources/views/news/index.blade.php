@extends ('layout')

@section('content')

<div class="divPage divActualites">
    <div class="container">
        <section class="top">
            <h1>Nos actualités</h1>
            <div class="description">
                Parce que vous tenir informé est pour nous une évidence pour construire un lien de proximité. <br>
                Retrouvez l'ensemble de nos actualités.
            </div>
            @if(Auth::user())
            <div class="actions">
                <div class="add">
                    <a href="{{ route('news.create') }}" title="Ajouter une actualité" class="button blue">Ajouter une actualité</a>
                </div>
            </div>
            @endif
            <div class="list">
                @foreach($news as $new)
                    <div class="card">
                        <h3>{{ $new->title }}</h3>
                        <div class="description">
                            <p>{{ $new->short_description }}</p>
                        </div>
                        <a href="{{ route('news.show', $new) }}" title="En savoir plus sur {{ $new->title }}" class="showmore"></a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</div>

@endsection
