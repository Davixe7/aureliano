<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'business_name' => 'sometimes|required|string|max:255',
            'rfc' => 'sometimes|required|string|unique:companies,rfc,' . $this->route('company')->id . '|max:13',
            'economic_activity' => 'sometimes|required|string|max:255',
            'invoice_email' => 'sometimes|required|email|max:255',
            'address' => 'sometimes|required|string|max:255',
            'state' => 'sometimes|required|string|max:100',
            'city' => 'sometimes|required|string|max:100',
            'zip_code' => 'sometimes|required|string|max:10',
            'referral_code' => 'nullable|string|max:50',
        ];
    }
}
