<?php

namespace Database\Seeders;

use App\Models\Gift;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Gift::factory()->create([
            'name' => 'Cadeau 1',
            'url' => 'https://example.com/cadeau1',
            'details' => 'Détails du cadeau 1',
            'price' => 5.0,
        ]);
    }
}
