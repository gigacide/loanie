<?php

namespace App\Validation;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoanApplicationValidation
{
    /**
     * @throws ValidationException
     */
    public static function validate(array $data): array
    {
        $rules = [
            'affiliate_id' => 'required',
            'offer_id' => 'required',
            'aff_sub' => 'sometimes|nullable',
            'aff_sub2' => 'sometimes|nullable',
            'aff_sub3' => 'sometimes|nullable',
            'aff_sub4' => 'sometimes|nullable',
            'aff_sub5' => 'sometimes|nullable',
            'transaction_id' => 'required',
            'minCommissionAmount' => 'required',
            'maxCommissionAmount' => 'required',
            'timeout' => 'required',
            'istest' => 'required',
            'source' => 'required|array',
            'source.userAgent' => 'required',
            'source.ipAddress' => 'required',
            'source.creationUrl' => 'required',
            'source.referringUrl' => 'required',
            'loan' => 'required|array',
            'loan.loanAmount' => 'required|numeric|min:50|max:50000|multiple_of:50',
            'loan.loanTerms' => 'required|in:1,3,6,12,18,24,36,48,60',
            'loan.loanPurpose' => 'required'
            ,
            'applicant' => 'required|array',
            'applicant.nameTitle' => 'required|in:1,2,3,4',
            'applicant.firstName' => ['required', 'string', 'min:2', 'regex:/^[a-zA-Z-\'" ]+$/', 'not_in:Mr,Miss,Mrs,Ms'],
            'applicant.lastName' => ['required', 'string', 'min:2', 'regex:/^[a-zA-Z-\'" ]+$/', 'not_in:Mr,Miss,Mrs,Ms'],
            'applicant.dateOfBirthDay' => 'required|min:2',
            'applicant.dateOfBirthMonth' => 'required|min:2',
            'applicant.dateOfBirthYear' => 'required|min:4',
            'applicant.ssn' => 'required|min:9',
            'applicant.email' => 'required|email:rfc,dns,spoof,filter',
            'applicant.homePhoneNumber' => 'required',
            'applicant.cellPhoneNumber' => 'required',
            'applicant.workPhoneNumber' => 'required',
            'applicant.maritalStatus' => 'in:0,1,2,3,4,5,6,7',
            'applicant.dependants' => 'in:0,1,2,3,4',
            'applicant.inMilitary' => 'required|in:1,2,3,4',
            'applicant.drivingLicenseState' => 'required|min:2',
            'applicant.drivingLicenseNumber' => 'required|min:4|max:20',
            'applicant.callTime' => 'required',
            'applicant.creditType' => 'required',

            'residence' => 'required|array',
            'residence.houseNumber' => 'required',
            'residence.residentialStatus' => 'required|in:1,2,3,4,5,6',
            'residence.addressStreet1' => 'required|different:residence.houseNumber|min:4|max:128',
            'residence.city' => 'required|min:2|max:32',
            'residence.state' => 'required|min:2|max:32',
            'residence.zip' => 'required|min:4|max:16',
            'residence.monthsAtAddress' => 'required|in:0,12,24,36,48,60,72,84,96',

            'employer' => 'required|array',
            'employer.employerName' => 'required|min:2|max:64',
            'employer.jobTitle' => 'required|min:2|max:64',
            'employer.monthlyIncome' => 'required|numeric|gte:100|lte:15000',
            'employer.incomeCycle' => 'required|in:1,2,3,4,5,6,7,8,9,10,11,12,13,14',
            'employer.incomeSource' => 'required|in:1,2,3,4,5,6,7,8,9,10,11',
            'employer.incomePaymentType' => 'required|in:1,2,3,4',
            'employer.monthsAtEmployer' => 'required|in:0,12,24,36,48,60,72,84,96',
            'employer.nextPayDateDay' => 'required|min:2|max:2|size:2',
            'employer.nextPayDateMonth' => 'required|min:2|max:2|size:2',
            'employer.nextPayDateYear' => 'required|min:4|max:4|size:4',
            'employer.followingPayDateDay' => 'required|min:2|max:2|size:2',
            'employer.followingPayDateMonth' => 'required|min:2|max:2|size:2',
            'employer.followingPayDateYear' => 'required|min:4|max:4|size:4',

            'bank' => 'required|array',
            'bank.bankAccountType' => 'required|in:1,2,3,4,5,6',
            'bank.bankRoutingNumber' => ['required', 'regex:/^\d{9}$/'],
            'bank.bankAccountNumber' => ['required', 'regex:/^[A-Za-z0-9]{4,30}$/'],
            'bank.monthsAtBank' => 'required|in:12,24,36,48,60,72,84,96',
            'bank.bankName' => 'required|min:2|max:64',
            'bank.bankPhone' => 'nullable|min:10',
            'bank.directDeposit' => 'required',

            'consent' => 'required|array',
            'consent.consentFinancial' => 'required|boolean',
            'consent.consentToMarketingEmails' => 'boolean',
        ];


        $validator = Validator::make($data, $rules);

        // Format the dates as "DD-MM-YYYY" before validating
        $validator->sometimes('employer.nextPayDateDay', 'date_format:d-m-Y', function ($input) {
            return isset($input['employer.nextPayDateDay']) && isset($input['employer.nextPayDateMonth']) && isset($input['employer.nextPayDateYear']);
        });

        $validator->sometimes('employer.followingPayDateDay', 'date_format:d-m-Y', function ($input) {
            return isset($input['employer.followingPayDateDay']) && isset($input['employer.followingPayDateMonth']) && isset($input['employer.followingPayDateYear']);
        });



        return $validator->validate();
    }
}
