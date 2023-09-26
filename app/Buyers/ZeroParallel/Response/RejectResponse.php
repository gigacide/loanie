<?php

namespace App\Buyers\Response;


class RejectResponse implements ApiResponseInterface
{
    private int $status;
    private string $statusText;

    public function __construct(array $response)
    {
        $this->status = 2;
        $this->statusText = 'Reject';
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getStatusText(): string
    {
        return $this->statusText;
    }
}
