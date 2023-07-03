<?php

namespace App\Repositories;

use App\Models\Applicant;
use App\Models\Bank;
use App\Models\Consent;
use App\Models\Employer;
use App\Models\Expense;
use App\Models\Loan;
use App\Models\Residence;
use App\Models\Source;
use App\Models\LoanApplication;

class PingtreeRepository
{

    public function loanApplication($validatedData)
    {
        $loanApplication = new LoanApplication();
        $loanApplication->affiliate_id = $validatedData['affiliate_id'];
        $loanApplication->offer_id = $validatedData['offer_id'];
        $loanApplication->uuid = $validatedData['uuid']->toString();
        $loanApplication->transaction_id = $validatedData['transaction_id'];
        $loanApplication->minCommissionAmount = $validatedData['minCommissionAmount'];
        $loanApplication->maxCommissionAmount = $validatedData['maxCommissionAmount'];
        $loanApplication->timeout = $validatedData['timeout'];
        $loanApplication->aff_sub = $validatedData['aff_sub'] ?? 'null';
        $loanApplication->aff_sub2 = $validatedData['aff_sub2'] ?? 'null';
        $loanApplication->aff_sub3 = $validatedData['aff_sub3'] ?? 'null';
        $loanApplication->aff_sub4 = $validatedData['aff_sub4'] ?? 'null';
        $loanApplication->aff_sub5 = $validatedData['aff_sub5'] ?? 'null';
        $response = $loanApplication->save();

        if ($response) {
            return $validatedData['uuid'];
        } else {
            return false;
        }
    }

    public function loanApplicationSource($validatedData, $uuid)
    {
        $source = new Source();
        $source->lead_id = $uuid;
        $source->ipAddress = $validatedData['source']['ipAddress'];
        $source->userAgent = $validatedData['source']['userAgent'];
        $source->creationUrl = $validatedData['source']['creationUrl'];
        $source->referringUrl = $validatedData['source']['referringUrl'];

        if ($source->save()) {
            return $source->id;
        } else {
            return false;
        }
    }

    public function loanApplicationLoan($validatedData, $uuid)
    {
        $loan = new Loan();
        $loan->lead_id = $uuid;
        $loan->loanAmount = $validatedData['loan']['loanAmount'];
        $loan->loanTerms = $validatedData['loan']['loanTerms'];
        $response = $loan->save();

        if ($response) {
            return $loan->id;
        } else {
            return false;
        }
    }

    public function loanApplicationApplicant($validatedData, $uuid)
    {
        $applicant = new Applicant();
        $applicant->lead_id = $uuid;
        $applicant->nameTitle = $validatedData['applicant']['nameTitle'];
        $applicant->firstName = $validatedData['applicant']['firstName'];
        $applicant->lastName = $validatedData['applicant']['lastName'];
        $applicant->dateOfBirthDay = $validatedData['applicant']['dateOfBirthDay'];
        $applicant->dateOfBirthMonth = $validatedData['applicant']['dateOfBirthMonth'];
        $applicant->dateOfBirthYear = $validatedData['applicant']['dateOfBirthYear'];
        $applicant->ssn = $validatedData['applicant']['ssn'];
        $applicant->email = $validatedData['applicant']['email'];
        $applicant->homePhoneNumber = $validatedData['applicant']['homePhoneNumber'];
        $applicant->cellPhoneNumber = $validatedData['applicant']['cellPhoneNumber'];
        $applicant->workPhoneNumber = $validatedData['applicant']['workPhoneNumber'];
        $applicant->maritalStatus = $validatedData['applicant']['maritalStatus'];
        $applicant->dependants = $validatedData['applicant']['dependants'];
        $applicant->inMilitary = $validatedData['applicant']['inMilitary'];
        $applicant->drivingLicenseState = $validatedData['applicant']['drivingLicenseState'];
        $applicant->drivingLicenseNumber = $validatedData['applicant']['drivingLicenseNumber'];
        $applicant->creditType = $validatedData['applicant']['creditType'];
        $applicant->callTime = $validatedData['applicant']['callTime'];
        $response = $applicant->save();

        if ($response) {
            return $applicant->id;
        } else {
            return false;
        }
    }

    public function loanApplicationResidence($validatedData, $uuid)
    {
        $residence = new Residence();
        $residence->lead_id = $uuid;
        $residence->houseNumber = $validatedData['residence']['houseNumber'];
//        $residence->houseName = $validatedData['residence']['houseName'];
        $residence->residentialStatus = $validatedData['residence']['residentialStatus'];
        $residence->addressStreet1 = $validatedData['residence']['addressStreet1'];
        $residence->city = $validatedData['residence']['city'];
        $residence->state = $validatedData['residence']['state'];
        $residence->zip = $validatedData['residence']['zip'];
        $residence->monthsAtAddress = $validatedData['residence']['monthsAtAddress'];
        $response = $residence->save();

        if ($response) {
            return $residence->id;
        } else {
            return false;
        }
    }

    public function loanApplicationEmployer($validatedData, $uuid)
    {

        $employer = new Employer();
        $employer->lead_id = $uuid;
        $employer->employerName = $validatedData['employer']['employerName'] ?? '';
        $employer->employmentStatus = $validatedData['employer']['employmentStatus'] ?? '';
        $employer->monthsAtEmployer = $validatedData['employer']['monthsAtEmployer'] ?? '';
        $employer->jobTitle = $validatedData['employer']['jobTitle'] ?? '';
        $employer->monthlyIncome = $validatedData['employer']['monthlyIncome'] ?? '';
        $employer->incomeCycle = $validatedData['employer']['incomeCycle'] ?? '';
        $employer->incomeSource = $validatedData['employer']['incomeSource'] ?? '';
        $employer->incomePaymentType = $validatedData['employer']['incomePaymentType'] ?? '';
        $employer->nextPayDateDay = $validatedData['employer']['nextPayDateDay'] ?? '';
        $employer->nextPayDateMonth = $validatedData['employer']['nextPayDateMonth'] ?? '';
        $employer->nextPayDateYear = $validatedData['employer']['nextPayDateYear'] ?? '';
        $employer->followingPayDateDay = $validatedData['employer']['followingPayDateDay'] ?? '';
        $employer->followingPayDateMonth = $validatedData['employer']['followingPayDateMonth'] ?? '';
        $employer->followingPayDateYear = $validatedData['employer']['followingPayDateYear'] ?? '';
        $response = $employer->save();


        if ($response) {
            return $employer->id;
        } else {
            return false;
        }
    }

    public function loanApplicationBank($validatedData, $uuid)
    {

        $bank = new Bank();
        $bank->lead_id = $uuid;
        $bank->bankAccountType = $validatedData['bank']['bankAccountType'];
        $bank->bankRoutingNumber = $validatedData['bank']['bankRoutingNumber'];
        $bank->bankAccountNumber = $validatedData['bank']['bankAccountNumber'];
        $bank->monthsAtBank = $validatedData['bank']['monthsAtBank'];
        $bank->bankName = $validatedData['bank']['bankName'];
        $bank->directDeposit = $validatedData['bank']['directDeposit'];
        $response = $bank->save();


        if ($response) {
            return $bank->id;
        } else {
            return false;
        }

    }

    public function loanApplicationConsent($validatedData, $uuid)
    {
        $consent = new Consent();
        $consent->lead_id = $uuid;
        $consent->consentFinancial = $validatedData['consent']['consentFinancial'];
//        $consent->consentCreditSearch = $validatedData['consentCreditSearch'];
//        $consent->consentToMarketingEmails = $validatedData['consentToMarketingEmails'];
        $response = $consent->save();

        if ($response) {
            return $consent->id;
        } else {
            return false;
        }


    }

    public function loanApplicationUpdate($uuid, $leadIds)
    {

        $response = LoanApplication::where('uuid', $uuid)->update($leadIds);


        if ($response) {
            return LoanApplication::where('uuid', $uuid)->first();
        } else {
            return false;
        }

    }


}
