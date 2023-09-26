<?php


namespace App\Models;

use App\Repositories\PingtreeRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LoanApplication extends Model
{
    protected $table = 'loan_applications';

    protected $fillable = ['leadStatus', 'affiliate_lead_price', 'buyer_lead_price', 'redirectUrl', 'isRedirected', 'buyer_id'];

    public function source(): BelongsTo
    {
        return $this->belongsTo(Source::class);
    }

    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class);
    }

    public function loan(): BelongsTo
    {
        return $this->belongsTo(Loan::class);
    }

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }

    public function consent(): BelongsTo
    {
        return $this->belongsTo(Consent::class);
    }

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function residence(): BelongsTo
    {
        return $this->belongsTo(Residence::class);
    }

    /**
     * Store a new loan application and related data.
     *
     * @param array $data
     * @return string
     */
    public function store(array $data): string
    {
        $uuid = $this->createLoanApplication($data);
        $leadIds = $this->createLoanApplicationEntities($data, $uuid);
        return $this->updateLoanApplication($uuid, $leadIds);
    }

    /**
     * Create a new loan application record.
     *
     * @param array $data
     * @return string
     */
    private function createLoanApplication(array $data): string
    {
        $pingtreeRepository = new PingtreeRepository();
        return $pingtreeRepository->loanApplication($data);
    }

    /**
     * Create related entities for the loan application.
     *
     * @param array $data
     * @param string $uuid
     * @return array
     */
    private function createLoanApplicationEntities(array $data, string $uuid): array
    {
        $pingtreeRepository = new PingtreeRepository();

        return [
            'source_id' => $pingtreeRepository->loanApplicationSource($data, $uuid),
            'loan_id' => $pingtreeRepository->loanApplicationLoan($data, $uuid),
            'applicant_id' => $pingtreeRepository->loanApplicationApplicant($data, $uuid),
            'residence_id' => $pingtreeRepository->loanApplicationResidence($data, $uuid),
            'employer_id' => $pingtreeRepository->loanApplicationEmployer($data, $uuid),
            'bank_id' => $pingtreeRepository->loanApplicationBank($data, $uuid),
            'consent_id' => $pingtreeRepository->loanApplicationConsent($data, $uuid),
        ];
    }

    /**
     * Update the loan application with lead IDs.
     *
     * @param string $uuid
     * @param array $leadIds
     * @return string
     */
    private function updateLoanApplication(string $uuid, array $leadIds): string
    {
        $pingtreeRepository = new PingtreeRepository();
        return $pingtreeRepository->loanApplicationUpdate($uuid, $leadIds);
    }
}




