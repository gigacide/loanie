<?php

namespace App\Validation\database\factories;

use App\Models\Loan;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    protected $model = Loan::class;

    public function definition()
    {
        return [
            'loanAmount' => '50',
            'loanTerms' => 6,
            'loanPurpose' => 1,
        ];
    }
}
