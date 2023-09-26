<?php

namespace App\Buyers\ZeroParallel\Response;

class JsonResponse implements ApiResponseInterface
{
    public const STATUS = 4;
    private int $status;
    private string $statusText;
    private string $redirectUrl;
    private float $price;
    private array $errors;

    public function __construct(array $response)
    {
        $this->status = self::STATUS;
        $this->statusText = 'error';
        $this->errors = ['Duplicate Application'];
        $this->redirectUrl = $response['redirect_url'] ?? '';
        $this->price = isset($response['price']) ? (float)$response['price'] : 0.0;
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

    public function getErrors(): array
    {
        return $this->errors;
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
            'errors' => $this->errors,
        ]);
    }

    public function getLeadId(): string
    {
        // TODO: Implement getLeadId() method.
    }
}
