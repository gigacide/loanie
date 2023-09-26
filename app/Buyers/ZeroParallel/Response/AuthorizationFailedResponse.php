<?php

namespace App\Buyers\Response;

class AuthorizationFailedResponse implements ApiResponseInterface
{
    private int $status;
    private string $statusText;
    private array $errors;

    public function __construct(array $errors)
    {
        $this->status = 4;
        $this->statusText = 'Authorization Failed';
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

}
