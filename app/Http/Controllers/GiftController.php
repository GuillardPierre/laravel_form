<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGiftRequest;
use App\Models\Gift;

class GiftController extends Controller
{
    public function index()
    {
        $gifts = Gift::all();
        return view('welcome', compact('gifts'));
    }

    public function create() {}

    public function store(StoreGiftRequest $request)
    {
        $validated = $request->validated();
        $gift = Gift::create($validated);
        return response()->json(
            [
                'message' => 'Cadeau créé avec succès.',
                'data' => $gift,
            ],
            201,
        );
    }

    public function show(Gift $gift)
    {
        return view('show', compact('gift'));
    }

    public function edit(Gift $gift)
    {
        return response()->json([
            'data' => $gift,
        ]);
    }

    public function update(StoreGiftRequest $request, Gift $gift)
    {
        $validated = $request->validated();
        $gift->update($validated);
        return response()->json([
            'message' => 'Cadeau mis à jour avec succès.',
            'data' => $gift,
        ]);
    }

    public function destroy(Gift $gift)
    {
        $gift->delete();
        return response()->json([
            'message' => 'Cadeau supprimé avec succès.',
        ]);
    }
}
