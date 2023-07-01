<?php

namespace App\Services;

class RejectedResponse
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

    public function getLeadID(): string
    {
        return $this->data['LeadID'];
    }
}
