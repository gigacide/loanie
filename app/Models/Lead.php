<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{

    protected $table = 'leads';

    protected $fillable = [
        'applicant_id',
        'affiliate_id',
        'loan_amount',
        'source_id',
        'loan_id',
        'applicant_id',
        'residence_id',
        'employer_id',
        'bank_id',
        'consent_id',
        'transaction_id',
        'affiliate_id',
        'subid',
        'offer_id',
        'tier',
        'minCommissionAmount',
        'maxCommissionAmount',
        'timeout',
        'istest',
        'buyer_id',
        'buyer_tier_id',
        'affiliate_lead_price',
        'buyer_lead_price',
        'leadStatus',
        'model_type',
        'quality_score',
        'isRedirected',
        'redirectUrl'
    ];

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
    public function store($data): array
    {

        $models = [
            'loanApplication' => LoanApplication::class,
            'applicant' => Applicant::class,
            'source' => Source::class,
            'loan' => Loan::class,
            'residence' => Residence::class,
            'employer' => Employer::class,
            'bank' => Bank::class,
            'consent' => Consent::class,
        ];



        foreach ($models as $key => $modelClass) {
            if (isset($data[$key])) {
                $model = new $modelClass();
                $model->fill($data[$key]);
                $model->save();
            }
        }

        return $data;
    }
}



