<?php

namespace App\Buyers\ZeroParallel\Response;

class SoldResponse implements ApiResponseInterface
{
    public const STATUS = 1;

    private int $status;
    private string $statusText;
    private string $redirectUrl;
    private float $price;

    public function __construct(array $response)
    {
        $this->status = self::STATUS;
        $this->statusText = 'sold';
        $this->redirectUrl = $response['redirect_url'] ?? '';
        $this->price = $response['price'] ?? 0.00;
    }

    public function getStatus(): int
    {
        return self::STATUS;
    }

    public function getStatusText(): string
    {
        return $this->statusText;
    }

    public function getPrice(): float
    {
        return $this->price;
    }


    public function getRedirect(): string
    {
        return $this->redirectUrl;
    }

    public function getAffiliatePrice(): float
    {
        // Calculate the price with a 20% discount
        return $this->price * 0.8; // 20% discount (100% - 20%)
    }

    public function toJson(): string
    {
        return json_encode([
            'status' => $this->status,
            'status_text' => $this->statusText,
            'redirect_url' => $this->redirectUrl,
            'price' => $this->price,
        ]);
    }

    public function getLeadId(): string
    {
        // TODO: Implement getLeadId() method.
    }

    public function setPrice(float $price): float
    {
        $this->price = $price;
    }


}
