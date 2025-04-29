<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuotationResource;
use App\Models\Quotation;
use Illuminate\Http\Request;

use App\Services\QuotationService;
use StoreQuotationRequest;

class QuotationController extends Controller
{
    protected $quotationService;

    public function __construct(QuotationService $quotationService)
    {
        $this->quotationService = $quotationService;
    }

    public function store(StoreQuotationRequest $request)
    {
        $quotation = $this->quotationService->createQuotation($request->validated());
        return new QuotationResource($quotation);
    }
}
