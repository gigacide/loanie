<?php

namespace App\Http\Controllers;

use App\Models\CommissionLog;
use App\Models\LoanApplication;
use Illuminate\Http\Request;

class CommissionController extends Controller
{

    public function index()
    {
        $commissionlogs = CommissionLog::orderBy('id', 'desc')->paginate(10);

        return view('commission.index')->with('commissionlogs', $commissionlogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
