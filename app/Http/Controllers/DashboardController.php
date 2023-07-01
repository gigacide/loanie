<?php

namespace App\Http\Controllers;

use App\Models\LoanApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Lead; // Assuming the Lead model is imported correctly

class DashboardController extends Controller
{

    public function show(Request $request)
    {
        // Fetch the necessary data for the dashboard
        $user = $request->user();

        // Retrieve leads created this month
        $monthLeads = LoanApplication::whereMonth('created_at', now()->month)->get();

        // Retrieve leads created today
        $todayLeads = LoanApplication::whereDate('created_at', today())->get();

        // Calculate statistics for the month
        $monthSold = $monthLeads->where('leadStatus', 1)->count();
        $monthDeclined = $monthLeads->where('leadStatus', 0)->count();
        $monthPending = $monthLeads->where('leadStatus', 3)->count();
        $monthRevenue = $monthLeads->sum('buyer_lead_price');
        $monthProfit = $monthRevenue - ($monthRevenue * 0.1);

        // Calculate statistics for today
        $todaySold = $todayLeads->where('leadStatus', 1)->count();
        $todayDeclined = $todayLeads->where('leadStatus', 0)->count();
        $todayPending = $todayLeads->where('leadStatus', 3)->count();
        $todayRevenue = $todayLeads->sum('buyer_lead_price');
        $todayProfit = $todayRevenue - ($todayRevenue * 0.1);

        // Pass the data to the dashboard view
        return view('dashboard', [
            'user' => $user,
            'monthLeads' => $monthLeads,
            'todayLeads' => $todayLeads,
            'monthSold' => $monthSold,
            'monthDeclined' => $monthDeclined,
            'monthPending' => $monthPending,
            'monthRevenue' => $monthRevenue,
            'monthProfit' => $monthProfit,
            'todaySold' => $todaySold,
            'todayDeclined' => $todayDeclined,
            'todayPending' => $todayPending,
            'todayRevenue' => $todayRevenue,
            'todayProfit' => $todayProfit,
        ]);
    }

}
