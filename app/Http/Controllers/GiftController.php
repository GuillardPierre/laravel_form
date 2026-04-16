<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGiftRequest;
use App\Mail\GiftCreated;
use App\Models\Gift;
use Illuminate\Support\Facades\Mail;

class GiftController extends Controller
{
    public function index()
    {
        $gifts = Gift::all();
        return view('welcome', compact('gifts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreGiftRequest $request)
    {
        $validated = $request->validated();
        $gift = Gift::create($validated);

        $to = 'guillard.pierre@laposte.net';

        Mail::to($to)->send(new GiftCreated($gift->name, (string) $gift->price));

        return redirect()->route('gifts.show', $gift);
    }

    public function show(Gift $gift)
    {
        return view('show', compact('gift'));
    }

    public function edit(Gift $gift)
    {
        return view('edit', compact('gift'));
    }

    public function update(StoreGiftRequest $request, Gift $gift)
    {
        $validated = $request->validated();
        $gift->update($validated);
        return redirect()->route('gifts.show', $gift);
    }

    public function destroy(Gift $gift)
    {
        $gift->delete();
        return redirect()->route('gifts.index');
    }
}
