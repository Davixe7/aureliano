<?php

namespace App\Http\Controllers;

use App\Models\BoxType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBoxTypeRequest;
use App\Http\Requests\UpdateBoxTypeRequest;
use App\Http\Resources\BoxTypeResource;

class BoxTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BoxTypeResource::collection(BoxType::with('lines')->get());
    }

    public function store(StoreBoxTypeRequest $request)
    {
        $boxType = BoxType::create($request->validated());

        if ($request->hasFile('media')) {
            $boxType->addMedia($request->file('media'))->toMediaCollection('media');
        }

        return new BoxTypeResource($boxType);
    }

    public function show(BoxType $boxType)
    {
        return new BoxTypeResource($boxType);
    }

    public function update(UpdateBoxTypeRequest $request, BoxType $boxType)
    {
        $boxType->update($request->validated());

        if ($request->hasFile('media')) {
            $boxType->clearMediaCollection('media');
            $boxType->addMedia($request->file('media'))->toMediaCollection('media');
        }

        return new BoxTypeResource($boxType);
    }

    public function destroy(BoxType $boxType)
    {
        $boxType->delete();
        return response()->noContent();
    }
}
