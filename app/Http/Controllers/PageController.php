<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{

    private $GenerateAffiliate;

    public function getAffiliateParameters(Request $request)
    {
        $request->affiliate = $request->query();
        $transaction_id = Str::uuid();

        $loanAmount = $request['loanAmount'] ?? '';
        if ($loanAmount != '') {
            $loanAmount = ltrim($loanAmount, '%24');
        }


        $affiliate['loanAmount'] = $loanAmount ?? '0';
        $affiliate['affiliate_id'] = $request->affiliate['affiliate_id'] ?? 'AFF_0001';
        $affiliate['offer_id'] = $request->affiliate['offer_id'] ?? '1';
        $affiliate['transaction_id'] = $request->affiliate['transaction_id']??$transaction_id->toString();
        $affiliate['aff_sub'] = $request->affiliate['aff_sub'] ?? '';
        $affiliate['aff_sub2'] = $request->affiliate['aff_sub2'] ?? '';
        $affiliate['aff_sub3'] = $request->affiliate['aff_sub3'] ?? '';
        $affiliate['aff_sub4'] = $request->affiliate['aff_sub4'] ?? '';
        $affiliate['aff_sub5'] = $request->affiliate['aff_sub5'] ?? '';

        return $affiliate;
    }

    public function home_uk(Request $request)
    {
        $affiliate = $this->getAffiliateParameters($request);

        return view('home-uk', $affiliate);
    }
    public function home_us(Request $request)
    {
        $affiliate = $this->getAffiliateParameters($request);


        return view('index-us',   ['affiliate' => $affiliate]);

    }

    public function apply_uk(Request $request)
    {
        $affiliate = $this->getAffiliateParameters($request);

        return view('apply-uk', $affiliate);

    }

    public function apply_us(Request $request)
    {

        $affiliate = $this->getAffiliateParameters($request);


        return view('apply-now.apply-us', ['affiliate' => $affiliate]);

    }

    public function affiliates(Request $request)
    {

        $affiliate = $this->getAffiliateParameters($request);


        return view('apply-now.apply-us', ['affiliate' => $affiliate]);

    }

    public function keep_safe_from_scammers(Request $request)
    {

        $affiliate = $this->getAffiliateParameters($request);


        return view('apply-now.apply-us', ['affiliate' => $affiliate]);

    }

    public function loan_eligibility_check(Request $request)
    {
        $affiliate = $this->getAffiliateParameters($request);

        return view('apply-now.apply-us', ['affiliate' => $affiliate]);

    }


    /** Routes  */
    public function guides(Request $request)
    {
        $affiliate = $this->getAffiliateParameters($request);

        return view('guides.index', ['affiliate' => $affiliate]);
    }
    public function terms(Request $request)
    {
        $affiliate = $this->getAffiliateParameters($request);

        return view('terms.index', ['affiliate' => $affiliate]);
    }
    public function privacy(Request $request)
    {
        $affiliate = $this->getAffiliateParameters($request);

        return view('privacy-policy.index', ['affiliate' => $affiliate]);
    }
    public function marketing_opt_out(Request $request)
    {
        $affiliate = $this->getAffiliateParameters($request);

        return view('marketing-opt-out.index', ['affiliate' => $affiliate]);
    }
    public function faqs(Request $request)
    {
        $affiliate = $this->getAffiliateParameters($request);

        return view('faqs.index', ['affiliate' => $affiliate]);
    }
    public function contact(Request $request)
    {
        $affiliate = $this->getAffiliateParameters($request);

        return view('contact-us.index', ['affiliate' => $affiliate]);
    }
    public function complaints(Request $request)
    {
        $affiliate = $this->getAffiliateParameters($request);

        return view('complaints-procedure.index', ['affiliate' => $affiliate]);
    }

}
