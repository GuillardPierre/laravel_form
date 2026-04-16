@extends('layouts.app')

@section('title', 'Modifier un cadeau')

@section('content')
    <main class="page">
        <a href="{{ route('gifts.show', $gift) }}">← Retour</a>

        <h1>Modifier un cadeau</h1>

        <form action="{{ route('gifts.update', $gift) }}" method="POST" class="gift-form">
            @csrf
            @method('PUT')

            <label for="name">Nom</label>
            <input type="text" id="name" name="name" value="{{ old('name', $gift->name) }}" required>
            @error('name')
                <p class="field-error">{{ $message }}</p>
            @enderror

            <label for="price">Prix</label>
            <input type="text" id="price" name="price" value="{{ old('price', $gift->price) }}" required>
            @error('price')
                <p class="field-error">{{ $message }}</p>
            @enderror

            <label for="url">URL</label>
            <input type="text" id="url" name="url" value="{{ old('url', $gift->url) }}">
            @error('url')
                <p class="field-error">{{ $message }}</p>
            @enderror

            <label for="details">Détails</label>
            <textarea id="details" name="details" rows="5">{{ old('details', $gift->details) }}</textarea>
            @error('details')
                <p class="field-error">{{ $message }}</p>
            @enderror

            <button type="submit">Mettre à jour</button>
        </form>
    </main>
@endsection
