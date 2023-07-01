<?php

namespace App\Http\Controllers;

use App\Models\Click;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClickController extends Controller
{
    public function track(Request $request): RedirectResponse
    {
        // Extract the necessary data from the request
        $affiliateId = $request->input('affiliate_id');
        $offerId = $request->input('offer_id');
        $aff_sub = $request->input('aff_sub');
        $aff_sub2 = $request->input('aff_sub2');
        $aff_sub3 = $request->input('aff_sub3');
        $aff_sub4 = $request->input('aff_sub4');
        $aff_sub5 = $request->input('aff_sub5');
//        $transaction_id = Str::uuid();

        // Create a new Click record
        $click = new Click();
        $click->affiliate_id = $affiliateId;
        $click->offer_id = $offerId;
        $click->aff_sub = $aff_sub;
        $click->aff_sub2 = $aff_sub2;
        $click->aff_sub3 = $aff_sub3;
        $click->aff_sub4 = $aff_sub4;
        $click->aff_sub5 = $aff_sub5;
//        $click->transaction_id = $transaction_id;
        $click->save();

// Perform any additional actions if needed

// Set the cookie with a 60-day expiration
        $cookie = cookie('loanie_tracking', $click->id, 60 * 24 * 60); // Expires in 60 days (60 minutes * 24 hours * 60 days)

// Redirect the user to the offer destination URL
        return redirect()->to(route('home-us', [
            'affiliate_id' => $affiliateId,
            'offer_id' => $offerId,
            'aff_sub' => $click->aff_sub ?? '',
            'aff_sub2' => $click->aff_sub2 ?? '',
            'aff_sub3' => $click->aff_sub3 ?? '',
            'aff_sub4' => $click->aff_sub4 ?? '',
            'aff_sub5' => $click->aff_sub5 ?? '',
        ]))->withCookie($cookie);

    }
}
