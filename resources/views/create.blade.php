@extends('layouts.app')

@section('title', 'Créer un cadeau')

@section('content')
    <main class="page">
        <a href="{{ route('gifts.index') }}">← Retour</a>

        <h1>Créer un cadeau</h1>

        <form action="{{ route('gifts.store') }}" method="POST" class="gift-form">
            @csrf

            <label for="name">Nom</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <p class="field-error">{{ $message }}</p>
            @enderror

            <label for="price">Prix</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}" required>
            @error('price')
                <p class="field-error">{{ $message }}</p>
            @enderror

            <label for="url">URL</label>
            <input type="text" id="url" name="url" value="{{ old('url') }}">
            @error('url')
                <p class="field-error">{{ $message }}</p>
            @enderror

            <label for="details">Détails</label>
            <textarea id="details" name="details" rows="5">{{ old('details') }}</textarea>
            @error('details')
                <p class="field-error">{{ $message }}</p>
            @enderror

            <button type="submit">Créer</button>
        </form>
    </main>
@endsection