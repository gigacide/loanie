<?php

namespace App\Http\Controllers;

use App\Models\Click;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class ClickController extends Controller
{
    public function track(Request $request): RedirectResponse
    {
        // Validate and sanitize input data
        $validatedData = $request->validate([
            'affiliate_id' => 'required',
            'offer_id' => 'required',
            'aff_sub' => 'nullable',
            'aff_sub2' => 'nullable',
            'aff_sub3' => 'nullable',
            'aff_sub4' => 'nullable',
            'aff_sub5' => 'nullable',
            'transaction_id' => 'nullable',
        ]);

        // Create a new Click record
        $click = new Click($validatedData);
        $click->save();

        // Generate a unique tracking token (optional)
        $trackingToken = Str::random(32);

        // Store the tracking token in a secure way (e.g., database)

        // Set the cookie with a 60-day expiration
        $cookie = Cookie::make('loanie_tracking', $trackingToken, 60 * 24 * 60); // Expires in 60 days

        // Redirect the user to the offer destination URL
        return redirect()->to(route('home-us', $validatedData))->withCookie($cookie);
    }
}
