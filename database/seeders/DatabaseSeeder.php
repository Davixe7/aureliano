<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
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

        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
        ]);

        $this->call([
            CategorySeeder::class,
            BoxTypeSeeder::class,
            CardboardTypeSeeder::class,
            LidTypeSeeder::class,
            AddressSeeder::class,
            CompanySeeder::class,
            QuotationSeeder::class,
        ]);
    }
}
