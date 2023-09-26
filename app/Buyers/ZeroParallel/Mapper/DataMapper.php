<?php

namespace App\Buyers\Mapper;

class DataMapper implements MapperInterface
{
    public function map(array $data): array
    {
        $mappedData = [
            'apiId' => '8DC69457240C44DDABAB0154B8E404C5',
            'apiPassword' => '094b5b15f',
            'testMode' => '1',
            'productId' => '19',
            'price' => '0',
        ];

        $sourceMapper = new SourceMapper();
        $applicantMapper = new ApplicantMapper();
        $employerMapper = new EmployerMapper();
        $residenceMapper = new ResidenceMapper();
        $bankMapper = new BankMapper();
        $consentMapper = new ConsentMapper();

        $mappedData += $applicantMapper->map($data['applicant'] ?? []);
        $mappedData += $bankMapper->map($data['bank'] ?? []);
        $mappedData += $employerMapper->map($data['employer'] ?? []);
        $mappedData += $residenceMapper->map($data['residence'] ?? []);
        $mappedData += $consentMapper->map($data['consent'] ?? []);
        $mappedData += $sourceMapper->map($data['source'] ?? []);

        return $mappedData;
    }
}


