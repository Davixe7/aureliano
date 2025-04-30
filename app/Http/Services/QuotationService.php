<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Notifications\NewQuotationNotification;
use App\Models\{User, Company, Address, Quotation};

class QuotationService
{
    public function createQuotation(array $data)
    {
        return DB::transaction(function () use ($data) {

            $user = User::create($data['user']);
            $company = $user->company()->create($data['company']);
            $address = $user->addresses()->create($data['address']);

            // Crear cotización con todas las relaciones
            $quotation = Quotation::create([
                'user_id' => $user->id,
                'category_id' => $data['category_id'],
                'subcategory_id' => $data['parent_id'] ?? null,
                'box_type_id' => $data['box_type_id'],
                'cardboard_type_id' => $data['card_board_type_id'],
                'lid_type_id' => $data['lid_type_id'],
                'company_id' => $company->id,
                'address_id' => $address->id,
                'status' => 'pending',
                'quantity' => $data['quantity'],

                'product_name' => $data['product_name'],
                'product_color' => $data['product_color'],
                'product_width_mm' => $data['product_width_mm'],
                'product_length_mm' => $data['product_length_mm'],
                'product_height_mm' => $data['product_height_mm'],
                'product_color_qty' => $data['product_color_qty'],
            ]);

            $admin = User::first();
            $admin->notify(new NewQuotationNotification($quotation));

            return $quotation;
        });
    }
}
