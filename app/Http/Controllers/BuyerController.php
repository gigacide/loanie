<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the affiliates.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $affiliates = Buyer::all();

        return view('affiliates.index', compact('affiliates'));
    }
}
