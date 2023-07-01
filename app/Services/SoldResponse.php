<?php

namespace App\Services;

class SoldResponse
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

    public function getPrice(): string
    {
        return $this->data['Price'];
    }

    public function getRedirect(): string
    {
        return $this->data['Redirect'];
    }
}

