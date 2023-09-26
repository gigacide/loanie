<?php
namespace App\Buyers\ZeroParallel\Mapper;

use Illuminate\Validation\ValidationException;

class DataMapper implements MapperInterface
{
    /**
     * @throws ValidationException
     */
    public function map(array $data): array
    {
        $mappedData = $this->mapStaticData();
        $mappedData += $this->mapLoanData($data['loan'] ?? []);
        $mappedData += $this->mapSourceData($data['source'] ?? []);
        $mappedData += $this->mapApplicantData($data['applicant'] ?? []);
        $mappedData += $this->mapEmployerData($data['employer'] ?? []);
        $mappedData += $this->mapResidenceData($data['residence'] ?? []);
        $mappedData += $this->mapBankData($data['bank'] ?? []);
        $mappedData += $this->mapConsentData($data['consent'] ?? []);

        return $mappedData;
    }

    private function mapStaticData(): array
    {
        return [
            'apiId' => '8DC69457240C44DDABAB0154B8E404C5', //string
            'apiPassword' => '094b5b15f', //string
            'testMode' => 1, //int
            'closeConnection' => 1, //int
            'productId' => 19, //int
            'price' => 0, // decimal
        ];
    }

    private function mapLoanData(array $loanData): array
    {
        $loanMapper = new LoanMapper();
        return $loanMapper->map($loanData);
    }

    private function mapSourceData(array $sourceData): array
    {
        $sourceMapper = new SourceMapper();
        return $sourceMapper->map($sourceData);
    }

    private function mapApplicantData(array $applicantData): array
    {
        $applicantMapper = new ApplicantMapper();
        return $applicantMapper->map($applicantData);
    }

    private function mapEmployerData(array $employerData): array
    {
        $employerMapper = new EmployerMapper();
        return $employerMapper->map($employerData);
    }

    private function mapResidenceData(array $residenceData): array
    {
        $residenceMapper = new ResidenceMapper();
        return $residenceMapper->map($residenceData);
    }

    private function mapBankData(array $bankData): array
    {
        $bankMapper = new BankMapper();
        return $bankMapper->map($bankData);
    }

    /**
     * @throws ValidationException
     */
    private function mapConsentData(array $consentData): array
    {
        $consentMapper = new ConsentMapper();
        return $consentMapper->map($consentData);
    }
}

