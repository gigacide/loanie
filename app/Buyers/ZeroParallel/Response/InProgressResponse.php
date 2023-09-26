<?php

namespace App\Buyers\ZeroParallel\Response;

class InProgressResponse implements ApiResponseInterface
{
    public const STATUS = 3;

    private int $status;
    private string $statusText;
    public string $leadId;

    public function __construct(array $response)
    {
        $this->status = self::STATUS;
        $this->statusText = 'In Progress';
        $this->leadId = $response['lead_id'];
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getStatusText(): string
    {
        return $this->statusText;
    }

    public function toJson(): string
    {
        $responseData = [
            'status' => $this->status,
            'status_text' => $this->statusText,
            'leadId' => $this->leadId,
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
        // Assuming you have a property called $leadId in your class
        return $this->leadId;
    }
}

