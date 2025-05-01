<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'user_id' => User::first()->id,
            'zip_code' => '12345',
            'address' => '123 Main St',
            'state' => 'California',
            'city' => 'Los Angeles',
            'address_complement' => 'Apartment 101',
        ]);
    }
}
