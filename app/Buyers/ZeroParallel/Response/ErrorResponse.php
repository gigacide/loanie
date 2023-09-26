<?php

namespace App\Buyers\ZeroParallel\Response;

class ErrorResponse implements ApiResponseInterface
{

    public function __construct(array $response)
    {
    }

    public function getStatus(): int
    {
        // TODO: Implement getStatus() method.
    }

    public function getStatusText(): string
    {
        // TODO: Implement getStatusText() method.
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
}
