<?php

namespace Database\Seeders;

use App\Models\Quotation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quotation::create([
            'user_id' => 1,
            'category_id' => 2,
            'subcategory_id' => 1,
            'box_type_id' => 1,
            'cardboard_type_id' => 1,
            'lid_type_id' => 1,
            'company_id' => 1,
            'address_id' => 1,
            'product_name' => 'Caja de Cartón Personalizada',
            'product_color' => 'Azul',
            'product_width_mm' => 150,
            'product_length_mm' => 200,
            'product_height_mm' => 100,
            'product_color_qty' => 2,
            'status' => 'pending',
            'quantity' => 50,
        ]);
    }
}
