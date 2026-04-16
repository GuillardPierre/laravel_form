<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGiftRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:50',
            'url' => 'nullable|url:http,https',
            'details' => 'nullable|string',
            'price' => 'required|decimal:0,2',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Le champ nom est obligatoire.',
            'name.min' => 'Le nom doit contenir au minimum 3 caractères.',
            'name.max' => 'Le nom ne peut pas dépasser 50 caractères.',
            'url.url' => 'L\'URL doit commencer par http:// ou https://.',
            'price.required' => 'Le champ prix est obligatoire.',
            'price.decimal' => 'Le prix doit être un nombre avec 2 chiffres maximum après le point.',
        ];
    }
}
