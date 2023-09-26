<?php

namespace App\Buyers\ZeroParallel\Response;

class NotFoundResponse implements ApiResponseInterface
{
    public const STATUS = 5;

    private int $status;
    private string $statusText;
    private array $errors;

    public function __construct(array $errors)
    {
        $this->status = self::STATUS;
        $this->statusText = 'Not Found';
        $this->errors = $errors;
    }

    public function getStatus(): int
    {
        return self::STATUS;
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
