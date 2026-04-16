<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gifts</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <main class="page">
            <h1>Liste cadeaux</h1>

            <section class="list">
                @forelse ($gifts as $gift)
                    <article class="gift">
                        <h2>{{ $gift->name }}</h2>
                        <p class="price">Prix : {{ number_format($gift->price, 2, ',', ' ') }} €</p>
                    </article>
                @empty
                    <div >Aucun gift à afficher.</div>
                @endforelse
            </section>
        </main>
    </body>
</html>
