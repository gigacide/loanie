<?php

namespace App\Buyers\Response;

class InProgressResponse implements ApiResponseInterface
{
    private int $status;
    private string $statusText;

    public function __construct(array $response)
    {
        $this->status = 3;
        $this->statusText = 'In Progress';
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

