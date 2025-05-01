<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'user_id' => User::first()->id,
            'name' => 'Tech Solutions',
            'business_name' => 'Tech Solutions S.A.',
            'rfc' => 'TS123456789',
            'economic_activity' => 'Desarrollo de software',
            'invoice_email' => 'facturas@techsolutions.com',
        ]);
    }
}
