<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $gift->name }}</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <main class="page">
            <a href="/">← Retour</a>

            <article class="gift-detail">
                <h1>{{ $gift->name }}</h1>
                <p class="price">Prix : {{ $gift->price }} €</p>

                @if ($gift->url)
                    <p>Lien : <a href="{{ $gift->url }}" target="_blank">{{ $gift->url }}</a></p>
                @endif

                @if ($gift->details)
                    <p><strong>Détails :</strong></p>
                    <p>{{ $gift->details }}</p>
                @endif
            </article>
        </main>
    </body>
</html>
