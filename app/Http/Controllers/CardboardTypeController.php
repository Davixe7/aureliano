<?php

namespace App\Http\Controllers;

use App\Models\CardboardType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCardboardTypeRequest;
use App\Http\Requests\UpdateCardboardTypeRequest;
use App\Http\Resources\CardboardTypeResource;

class CardboardTypeController extends Controller
{
    public function index()
    {
        return CardboardTypeResource::collection(CardboardType::all());
    }

    public function store(StoreCardboardTypeRequest $request)
    {
        $cardboardType = CardboardType::create($request->validated());
        return new CardboardTypeResource($cardboardType);
    }

    public function show(CardboardType $cardboardType)
    {
        return new CardboardTypeResource($cardboardType);
    }

    public function update(UpdateCardboardTypeRequest $request, CardboardType $cardboardType)
    {
        $cardboardType->update($request->validated());
        return new CardboardTypeResource($cardboardType);
    }

    public function destroy(CardboardType $cardboardType)
    {
        $cardboardType->delete();
        return response()->noContent();
    }
}
