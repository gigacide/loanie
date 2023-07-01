<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\LoanApplication;
use Illuminate\Http\Request;

class LeadsController extends Controller
{

    public function index()
    {
        $leads = LoanApplication::with('source', 'applicant')->orderBy('id', 'desc')->paginate(10);

        return view('leads.index', ['leads' => $leads]);
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
