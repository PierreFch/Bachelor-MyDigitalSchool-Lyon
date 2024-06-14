@extends('layout')

@section('content')
    <div class="divPage divMissions create">
        <h1>Ajouter une mission</h1>
        <form action="{{ route('missions.store', $client) }}" method="POST">
            @csrf

            <div class="text">
                <label for="title">Titre : </label>
                <input type="text" value="{{ old('title') }}" placeholder="Titre" id="title" name="title">
                @error ('title')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text">
                <label for="reference">Référence : </label>
                <input type="text" value="{{ old('reference') }}" placeholder="Référence" id="reference" name="reference">
                @error ('reference')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text">
                <label for="advance">Acompte : </label>
                <input type="text" value="{{ old('advance') }}" placeholder="Acompte" id="advance" name="advance">
                @error ('advance')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>

            <div class="submit">
                <input type="submit" value="Ajouter la mission">
            </div>
        </form>
    </div>
@endsection
