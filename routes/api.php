<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BoxTypeController;
use App\Http\Controllers\CardboardTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LidTypeController;

Route::apiResources([
    'categories' => CategoryController::class,
    'box-types' => BoxTypeController::class,
    'cardboard-types' => CardboardTypeController::class,
    'lid-types' => LidTypeController::class,
    'addresses' => AddressController::class,
]);

Route::get('users/{user}/addresses', function (\App\Models\User $user) {
    return \App\Http\Resources\AddressResource::collection($user->addresses);
});

Route::get('users/{user}/company', function (\App\Models\User $user) {
    return new \App\Http\Resources\CompanyResource($user->company);
});
