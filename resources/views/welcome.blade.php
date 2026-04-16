@extends('layouts.app')

@section('title', 'Gifts')

@section('content')
    <main class="page">
        <h1>Liste cadeaux</h1>
        <p><a href="{{ route('gifts.create') }}">Ajouter un cadeau</a></p>

        <section class="list">
            @forelse ($gifts as $gift)
                <article class="gift">
                    <h2>{{ $gift->name }}</h2>
                    <p class="price">Prix : {{ number_format($gift->price, 2, ',', ' ') }} €</p>

                    <div class="gift-actions">
                        <a href="{{ route('gifts.show', $gift) }}">Voir</a>
                        <a href="{{ route('gifts.edit', $gift) }}">Modifier</a>

                        <form action="{{ route('gifts.destroy', $gift) }}" method="POST" class="inline-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </div>
                </article>
            @empty
                <div >Aucun gift à afficher.</div>
            @endforelse
        </section>
    </main>
@endsection
