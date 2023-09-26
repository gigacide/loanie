<?php

namespace App\Buyers\ZeroParallel\Mapper;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class EmployerMapper
{
    /**
     * @throws ValidationException
     */
    public function map(array $employerData): array
    {
        try {
            return [
                'workCompanyName' => $this->validateWorkCompanyName($employerData['employerName']),
                'jobTitle' => $this->validateJobTitle($employerData['jobTitle']),
                'workTimeAtEmployer' => $this->validateWorkTimeAtEmployer($employerData['monthsAtEmployer']),
                'incomeType' => $this->mapIncomeSource($employerData['incomeSource']),
                'incomePaymentFrequency' => $this->mapIncomeCycle($employerData['incomeCycle']),
                'incomeNetMonthly' => $this->validateIncomeNetMonthly($employerData['monthlyIncome']),
                'incomeNextDate1' => $this->validateIncomeNextDate($employerData['nextPayDateYear'], $employerData['nextPayDateMonth'], $employerData['nextPayDateDay']),
                'incomeNextDate2' => $this->validateIncomeNextDate($employerData['followingPayDateYear'], $employerData['followingPayDateMonth'], $employerData['followingPayDateDay']),
            ];
        } catch (ValidationException $e) {
            // Handle validation errors
            $errors = $e->validator->getMessageBag()->toArray();
            return ['validation_errors' => $errors];
        }
    }

    /**
     * @throws ValidationException
     */
    private function validateWorkCompanyName($workCompanyName)
    {
        return Validator::make(['workCompanyName' => $workCompanyName], [
            'workCompanyName' => 'required|string|min:1|max:128',
        ])->validate()['workCompanyName'];
    }

    /**
     * @throws ValidationException
     */
    private function validateJobTitle($jobTitle)
    {
        return Validator::make(['jobTitle' => $jobTitle], [
            'jobTitle' => 'nullable|string|max:128',
        ])->validate()['jobTitle'];
    }

    /**
     * @throws ValidationException
     */
    private function validateWorkTimeAtEmployer($workTimeAtEmployer)
    {
        return Validator::make(['workTimeAtEmployer' => $workTimeAtEmployer], [
            'workTimeAtEmployer' => 'required|numeric|min:1|max:10000',
        ])->validate()['workTimeAtEmployer'];
    }

    private function mapIncomeSource(string $incomeSource): string
    {
        $mapping = [
            1 => 'EMPLOYMENT', // Map '1' to '1'
            2 => 'SELF_EMPLOYMENT', // Map '2' to '2'
            3 => 'BENEFITS', // Map '3' to '3'
            4 => 'BENEFITS', // Map '4' to '4'
        ];

        return $mapping[$incomeSource] ?? 'EMPLOYMENT'; // Default to 'EMPLOYMENT' if not found in the mapping
    }

    private function mapIncomeCycle(string $incomeCycle): string
    {
        $mapping = [
            1 => 'WEEKLY', // Map '1' to '1'
            2 => 'BIWEEKLY', // Map '2' to '2'
            3 => 'TWICEMONTHLY,', // Map '3' to '3'
            4 => 'TWICEMONTHLY,', // Map '4' to '4'
        ];

        return $mapping[$incomeCycle] ?? 'WEEKLY'; // Default to 'WEEKLY' if not found in the mapping
    }

    /**
     * @throws ValidationException
     */
    private function validateIncomeNetMonthly($incomeNetMonthly)
    {
        return Validator::make(['incomeNetMonthly' => $incomeNetMonthly], [
            'incomeNetMonthly' => 'numeric|min:0|max:100000',
        ])->validate()['incomeNetMonthly'];
    }

    /**
     * @throws ValidationException
     */
    private function validateIncomeNextDate($year, $month, $day)
    {
//        $incomeNextDate = "$year-$month-$day";
        $incomeNextDate = "$year-$day-$month";
//        dd($incomeNextDate);
        //"2023-23-09
        return Validator::make(['incomeNextDate' => $incomeNextDate], [
            'incomeNextDate' => 'required|date_format:Y-m-d',
        ])->validate()['incomeNextDate'];
    }
}
