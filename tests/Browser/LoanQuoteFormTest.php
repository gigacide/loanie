<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoanQuoteFormTest extends DuskTestCase
{
    /**
     * A basic dusk test example.
     *
     * @return void
     */
    public function testLoanQuoteForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/apply-us') // Replace '/loan-quote' with the actual URL of your loan quote form
            ->type('loanAmount', '1500') // Fill in the loan amount field with '1500'
            ->radio('term_radio', '3') // Select the 3 months term
            ->radio('radio_purpose', '1') // Select the 'Subsistence' loan purpose
            ->click('#next1') // Click the 'Next' button
            ->waitFor('.loan-quotes') // Wait for the loan quotes section to load
            ->assertVisible('.loan-quotes') // Assert that the loan quotes section is visible

            ->select('radio_titles', '1')
                ->type('First_name', 'John')
                ->type('Last_name', 'Doe')
                ->type('Age', '01/01/1990')
                ->type('Email', 'john@doe.com')
                ->type('Mobile_phone', '5551234567')
                ->type('Home_phone', '5551234567')
                ->type('Work_phone', '5551234567')
                ->select('radio_marital', '1')
                ->select('radio_dependents', '2')
                ->select('radio_adultsLivingWith', '2')
                ->select('radio_source', '1')
                ->type('Employer_name', 'ABC Company')
                ->type('Job_title', 'Software Engineer')
                ->select('employmentindustry', '18')
                ->select('radio_employerYears', '12')
                ->select('radio_employerMonths', '3')
                ->select('radio_payment', '1')
                ->select('radio_frequency', '1')
                ->type('Next Pay Date', '07/15/2023')
                ->type('Following Pay Date', '07/30/2023')
                ->type('Net_monthly_amount', '5000')
                ->type('Mortgage_or_Rent', '1500')
                ->type('Social_number', '123456789')
                ->type('Driving_license_number', 'FL12345678')
                ->select('drivingLicenseState', 'FL')
                ->radio('radio_military', '1') // Select "None" for Military
                ->radio('radio_credit_score', '1') // Select "Excellent" for Credit Score
                ->radio('radio_best_time_to_call', '1') // Select "Anytime" for Best Time to Call
                ->type('Bank_name', 'My Bank')
                ->type('sortcode', '123456')
                ->type('accountnumber', '1234567890')
                ->radio('radio_primary_card', '5') // Select "Checking" for Primary Bank Account Type
                ->radio('radio_bankYears', '12') // Select "0" for Years At This Bank
                ->radio('radio_bankMonths', '3') // Select "3" for Months At This Bank

            ;
        });
    }
}
