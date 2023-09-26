<?php

namespace App\Buyers\Mapper;

use App\Buyers\Utils\DateUtils;


class EmployerMapper
{
    public function map(array $employerData): array
    {
        return [
            'workCompanyName' => $employerData['employerName'],
            'jobTitle' => $employerData['jobTitle'],
            'activeMilitary' => $this->mapActiveMilitary($employerData['inMilitary']),
            'workTimeAtEmployer' => $employerData['monthsAtEmployer'],
            'incomeType' => $this->mapIncomeSource($employerData['incomeSource']),
            'incomePaymentFrequency' => $this->mapIncomeCycle($employerData['incomeCycle']),
            'incomeNetMonthly' => $employerData['monthlyIncome'],
            'incomeNextDate1' => DateUtils::formatDate($employerData['nextPayDateYear'], $employerData['nextPayDateMonth'], $employerData['nextPayDateDay']),
            'incomeNextDate2' => DateUtils::formatDate($employerData['followingPayDateYear'], $employerData['followingPayDateMonth'], $employerData['followingPayDateDay']),
        ];
    }

    private function mapActiveMilitary(string $inMilitary): string
    {
        // Mapping logic for active military
    }

    private function mapIncomeSource(string $incomeSource): string
    {
        // Mapping logic for income source
    }

    private function mapIncomeCycle(string $incomeCycle): string
    {
        // Mapping logic for income cycle
    }
}
