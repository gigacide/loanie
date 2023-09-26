<?php

namespace App\Buyers\ZeroParallel\Response;

class ErrorResponse implements ApiResponseInterface
{
    public const STATUS = 6;
    private int $status;
    private string $statusText;
    private array $errors;

    public function __construct(array $errors)
    {
        $this->status = self::STATUS; // You can specify the appropriate status code for error responses.
        $this->statusText = 'Error'; // You can specify the appropriate status text for error responses.
        $this->errors = $errors;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getStatusText(): string
    {
        return $this->statusText;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function toJson(): string
    {
        $responseData = [
            'status' => $this->status,
            'status_text' => $this->statusText,
            'errors' => $this->errors,
        ];

        return json_encode($responseData);
    }

    public function getRedirect(): string
    {
        // TODO: Implement getRedirect() method.
    }

    public function getPrice(): float
    {
        // TODO: Implement getPrice() method.
    }

    public function getAffiliatePrice(): float
    {
        // TODO: Implement getAffiliatePrice() method.
    }

    public function getLeadId(): string
    {
        // TODO: Implement getLeadId() method.
    }
}
