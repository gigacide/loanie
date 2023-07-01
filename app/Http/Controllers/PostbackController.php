<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\Postback;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostbackController extends Controller
{
    /**
     * Display a listing of the affiliates.
     *
     * @return View
     */
    public function index()
    {
        $postbacklogs = Postback::paginate(10);

        return view('postback.index', ['postbacklogs' => $postbacklogs]);
    }
}
