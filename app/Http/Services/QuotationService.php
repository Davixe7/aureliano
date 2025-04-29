<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;
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
            ]);

            return $quotation;
        });
    }
}
