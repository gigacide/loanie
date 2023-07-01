<?php

namespace Tests\Unit\Validation;

use App\Validation\LoanApplicationValidation;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class LoanApplicationValidationTest extends TestCase
{
    public function testValidate_ValidData_ReturnsValidatedDataArray()
    {
        $data = [
            // Valid data here...
        ];

        $validatedData = LoanApplicationValidation::validate($data);

        $this->assertIsArray($validatedData);
        $this->assertEquals($data, $validatedData);
    }

    public function testValidate_InvalidData_ThrowsValidationException()
    {
        $this->expectException(ValidationException::class);

        $data = [
            // Invalid data here...
        ];

        LoanApplicationValidation::validate($data);
    }
}
