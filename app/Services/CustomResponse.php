<?php

namespace App\Services;


class CustomResponse
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

    // Add additional methods and logic as needed for the custom response
}
