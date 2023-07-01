<?php


namespace App\Models;

use App\Repositories\PingtreeRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LoanApplication extends Model
{

    protected $table = 'loan_applications';

    protected $fillable = ['leadStatus', 'affiliate_lead_price', 'buyer_lead_price', 'redirectUrl', 'isRedirected', 'buyer_id'];


    public function source()
    {
        return $this->belongsTo(Source::class);
    }

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
    public function consent()
    {
        return $this->belongsTo(Consent::class);
    }
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function residence()
    {
        return $this->belongsTo(Residence::class);
    }

    /**
     * @param $data
     * @return array
     */
    public function store($data)
    {
        $validatedData = $data;

        $leadIds = [];

        $pingtreeRepository = new PingtreeRepository();

        $uuid = $pingtreeRepository->loanApplication($validatedData);
        $leadIds['source_id'] = $pingtreeRepository->loanApplicationSource($validatedData, $uuid);
        $leadIds['loan_id'] = $pingtreeRepository->loanApplicationLoan($validatedData, $uuid);
        $leadIds['applicant_id'] = $pingtreeRepository->loanApplicationApplicant($validatedData, $uuid);
        $leadIds['residence_id'] = $pingtreeRepository->loanApplicationResidence($validatedData, $uuid);
        $leadIds['employer_id'] = $pingtreeRepository->loanApplicationEmployer($validatedData, $uuid);
        $leadIds['bank_id'] = $pingtreeRepository->loanApplicationBank($validatedData, $uuid);
        $leadIds['consent_id'] = $pingtreeRepository->loanApplicationConsent($validatedData, $uuid);

        return $pingtreeRepository->loanApplicationUpdate($uuid, $leadIds);
    }



}



