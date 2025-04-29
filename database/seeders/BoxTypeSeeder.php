<?php

namespace Database\Seeders;

use App\Models\BoxType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoxTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BoxType::create([
            'name' => 'Standard Box',
            'slug' => Str::slug('Standard Box'),
            'description' => 'A standard box used for general packaging.',
        ]);
    }
}
