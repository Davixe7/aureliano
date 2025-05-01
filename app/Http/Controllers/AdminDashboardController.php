<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function getQuotations()
    {
        return response()->json(Quotation::latest()->paginate(10));
    }

    public function getNotifications()
    {
        return response()->json(auth()->user()->notifications);
    }
}
