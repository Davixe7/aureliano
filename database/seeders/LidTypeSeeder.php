<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LidTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LidType::create([
            'name' => 'Flat Lid',
            'description' => 'A standard flat lid used for packaging.',
        ]);
    }
}
