<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoanApplicationRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'affiliate_id' => 'required',
            'offer_id' => 'required',

            // Source
            'source.userAgent' => 'required',
            'source.creationUrl' => 'required',
            'source.referringUrl' => 'required',

            // Loan
            'loan.loanAmount' => 'required|numeric|gte:50|lte:50000|multiple_of:50',
            'loan.loanTerms' => ['required', Rule::in([1, 3, 6, 12, 18, 24, 36, 48, 60])],

            // Applicant
            'applicant.nameTitle' => ['required', Rule::in([1, 2, 3, 4])],
            'applicant.firstName' => ['required', 'string', 'min:2', 'regex:/^[a-zA-Z-\'" ]+$/', Rule::notIn(['Mr', 'Miss', 'Mrs', 'Ms'])],
            'applicant.lastName' => ['required', 'string', 'min:2', 'regex:/^[a-zA-Z-\'" ]+$/', Rule::notIn(['Mr', 'Miss', 'Mrs', 'Ms'])],
            'applicant.dateOfBirthDay' => 'required|min:2',
            'applicant.dateOfBirthMonth' => 'required|min:2',
            'applicant.dateOfBirthYear' => 'required|min:4',
            'applicant.ssn' => 'required|min:9',
            'applicant.email' => 'required|email:rfc,dns,spoof,filter',
            'applicant.homePhoneNumber' => 'required|min:10',
            'applicant.cellPhoneNumber' => 'required|min:10',
            'applicant.workPhoneNumber' => 'required|min:10',
            'applicant.maritalStatus' => [Rule::in([0, 1, 2, 3, 4, 5, 6, 7])],
            'applicant.dependants' => [Rule::in([0, 1, 2, 3, 4])],
            'applicant.inMilitary' => ['required', Rule::in([1, 2, 3, 4])],
            'applicant.drivingLicenseState' => 'required|min:2',
            'applicant.drivingLicenseNumber' => 'required|min:4|max:20',

            // Residence
            'residence.houseNumber' => 'required_if:houseName,null',
            'residence.houseName' => 'required_if:houseNumber,null',
            'residence.residentialStatus' => ['required', Rule::in([1, 2, 3, 4, 5, 6])],
            'residence.addressStreet1' => 'required|different:houseNumber|min:4|max:128',
            'residence.city' => 'required|min:2|max:32',
            'residence.state' => 'required|string|min:2|max:2|size:2',
            'residence.zip' => 'required|min:5',
            'residence.monthsAtAddress' => ['required', Rule::in([0, 12, 24, 36, 48, 60, 72, 84, 96])],

            // Employer
            'employer.incomeSource' => ['required', Rule::in([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11])],
            'employer.incomeCycle' => ['required', Rule::in([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14])],
            'employer.monthlyIncome' => 'required|numeric|gte:100|lte:15000',
            'employer.monthsAtEmployer' => ['required', Rule::in([0, 12, 24, 36, 48, 60, 72, 84, 96])],
            'employer.incomePaymentType' => ['required', Rule::in([1, 2, 3, 4])],
            'employer.nextPayDateDay' => 'required|min:2|max:2|size:2',
            'employer.nextPayDateMonth' => 'required|min:2|max:2|size:2',
            'employer.nextPayDateYear' => 'required|min:4|max:4|size:4',
            'employer.followingPayDateDay' => 'required|min:2|max:2|size:2',
            'employer.followingPayDateMonth' => 'required|min:2|max:2|size:2',
            'employer.followingPayDateYear' => 'required|min:4|max:4|size:4',

            // Bank
            'bank.bankPhone' => 'min:10',
            'bank.bankName' => 'required|min:2|max:64',
            'bank.bankAccountType' => ['required', Rule::in([5, 6])],
            'bank.bankAccountNumber' => 'required|min:4|max:30',
            'bank.bankRoutingNumber' => 'required|digits:9',
            'bank.monthsAtBank' => ['required', Rule::in([12, 24, 36, 48, 60, 72, 84, 96])],

            // Consent
            'consent.consentFinancial' => 'required|boolean',
            'consent.consentToMarketingEmails' => 'required|boolean',
        ];
    }
}
