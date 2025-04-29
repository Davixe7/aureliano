<?php

use App\Http\Controllers\BoxTypeController;
use App\Http\Controllers\CardboardTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LidTypeController;

Route::apiResources([
    'categories' => CategoryController::class,
    'box-types' => BoxTypeController::class,
    'cardboard-types' => CardboardTypeController::class,
    'lid-types' => LidTypeController::class
]);
