@extends('layouts.app')

@section('title', $gift->name)

@section('content')
    <main class="page">
        <a href="{{ route('gifts.index') }}">← Retour</a>
        <p><a href="{{ route('gifts.edit', $gift) }}">Modifier ce cadeau</a></p>

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
@endsection
