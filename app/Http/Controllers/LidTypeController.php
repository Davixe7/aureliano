<?php

namespace App\Http\Controllers;

use App\Models\LidType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLidTypeRequest;
use App\Http\Requests\UpdateLidTypeRequest;
use App\Http\Resources\LidTypeResource;

class LidTypeController extends Controller
{
    public function index()
    {
        return LidTypeResource::collection(LidType::all());
    }

    public function store(StoreLidTypeRequest $request)
    {
        $lidType = LidType::create($request->validated());
        return new LidTypeResource($lidType);
    }

    public function show(LidType $lidType)
    {
        return new LidTypeResource($lidType);
    }

    public function update(UpdateLidTypeRequest $request, LidType $lidType)
    {
        $lidType->update($request->validated());
        return new LidTypeResource($lidType);
    }

    public function destroy(LidType $lidType)
    {
        $lidType->delete();
        return response()->noContent();
    }
}
