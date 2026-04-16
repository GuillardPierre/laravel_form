<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Créer un cadeau</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <main class="page">
            <a href="/">← Retour</a>

            <h1>Créer un cadeau</h1>

            @if ($errors->any())
                <div class="errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/cadeau" method="POST" class="gift-form">
                @csrf

                <label for="name">Nom</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>

                <label for="price">Prix</label>
                <input type="text" id="price" name="price" value="{{ old('price') }}" required>

                <label for="url">URL</label>
                <input type="text" id="url" name="url" value="{{ old('url') }}">

                <label for="details">Détails</label>
                <textarea id="details" name="details" rows="5">{{ old('details') }}</textarea>

                <button type="submit">Créer</button>
            </form>
        </main>
    </body>
</html>