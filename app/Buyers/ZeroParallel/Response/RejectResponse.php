<?php

namespace App\Buyers\ZeroParallel\Response;


class RejectResponse implements ApiResponseInterface
{
    public const STATUS = 2;

    private int $status;
    private string $statusText;
    private string $redirectUrl;
    private float $price;

    public function __construct(array $response)
    {
        $this->status = self::STATUS;
        $this->statusText = 'Reject';
        $this->redirectUrl = '';
        $this->price = 0.00;
    }

    public function getStatus(): int
    {
        return self::STATUS;
    }

    public function getRedirect(): string
    {
        return $this->redirectUrl;

    }


    public function getPrice(): float
    {
        return $this->price;
    }

    public function getAffiliatePrice(): float
    {
        return $this->price = 0.00;

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
        ];

        return json_encode($responseData);
    }


    public function getLeadId(): string
    {
        // TODO: Implement getLeadId() method.
    }
}
