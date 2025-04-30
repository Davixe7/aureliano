<?php

use Illuminate\Foundation\Http\FormRequest;

class StoreQuotationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // Datos del usuario
            'user.name' => 'required|string|max:255',
            'user.email' => 'required|string|email|unique:users,email',
            'user.password' => 'required|string|min:8',

            // Datos de la empresa
            'company.name' => 'required|string|max:255',
            'company.business_name' => 'required|string|max:255',
            'company.rfc' => 'required|string|unique:companies,rfc|max:13',
            'company.economic_activity' => 'required|string|max:255',
            'company.invoice_email' => 'required|email|max:255',
            'company.address' => 'required|string|max:255',
            'company.state' => 'required|string|max:100',
            'company.city' => 'required|string|max:100',
            'company.zip_code' => 'required|string|max:10',
            'company.referral_code' => 'nullable|string|max:50',

            // Datos del domicilio
            'address.zip_code' => 'required|string|max:10',
            'address.address' => 'required|string|max:255',
            'address.state' => 'required|string|max:100',
            'address.city' => 'required|string|max:100',
            'address.address_complement' => 'nullable|string|max:255',

            // Datos del producto
            'product_name' => 'required|string|max:255',
            'product_color' => 'required|string|max:50',
            'product_width_mm' => 'required|integer|min:1',
            'product_length_mm' => 'required|integer|min:1',
            'product_height_mm' => 'required|integer|min:1',
            'product_color_qty' => 'required|integer|min:1',

            // IDs de las selecciones
            'category_id' => 'required|exists:categories,id',
            'parent_id' => 'nullable|exists:categories,id',
            'box_type_id' => 'required|exists:box_types,id',
            'card_board_type_id' => 'required|exists:cardboard_types,id',
            'lid_type_id' => 'required|exists:lid_types,id',

            // Cotización
            'quantity' => 'required|integer|min:1',
        ];
    }
}

