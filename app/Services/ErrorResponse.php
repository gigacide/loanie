<?php

namespace App\Services;


class ErrorResponse
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getStatus(): string
    {
        return $this->data['Status'];
    }

    public function getMessages(): array
    {
        return $this->data['Messages'];
    }
}

