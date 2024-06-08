<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard(Request $request)
    {
        // Fetch dashboard data
        $dashboardData = [
            // example data
            'totalUsers' => 1023,
            'revenue' => 5120,
            'traffic' => 3200
        ];

        return response()->json([
            'message' => 'Superadmin Dashboard Data',
            'data' => $dashboardData
        ], 200);
    }
}
