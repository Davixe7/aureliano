<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BoxTypeController;
use App\Http\Controllers\CardboardTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LidTypeController;
use App\Http\Controllers\AdminAuthController;

Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->middleware('auth:admin');

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

Route::post('/admin/notifications/{id}/read', function ($id) {
    //auth()->user()->notifications()->where('id', $id)->first()->markAsRead();
    //return response()->json(['message' => 'Notificación marcada como leída']);
});

