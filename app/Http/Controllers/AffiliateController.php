<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    /**
     * Display a listing of the affiliates.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $affiliates = Affiliate::paginate(10);

        return view('affiliates.index', ['affiliates' => $affiliates]);
    }
}
