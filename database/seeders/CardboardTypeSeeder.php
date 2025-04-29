<?php

namespace Database\Seeders;

use App\Models\CardboardType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardboardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CardboardType::create([
            'name' => 'Corrugated Cardboard',
            'description' => 'A strong and durable type of cardboard used for packaging.',
        ]);
    }
}
