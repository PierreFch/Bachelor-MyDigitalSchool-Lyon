@extends('layout')

@section('content')

<div class="divPage divRegister">
    <div class="container">
        <h1>Inscription</h1>

        <form action="{{ route('auth.registration') }}" method="POST">
            @csrf
            <div class="input-field">
                <label for="email">Email</label>
                <input type="email" value="{{ old('email') }}" id="email" name="email" @error('email')invalid @enderror">
                @error ('email')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="input-field">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" @error('password')invalid @enderror">
                @error ('password')
                <div class="invalid"> {{ $message }}</div>
                @enderror
            </div>
            <div class="submit">
                <input type="submit" class="button blue" title="Se connecter">
            </div>
        </form>
    </div>
</div>

@endsection
