<?php

namespace App\Buyers\Response;


class SoldResponse implements ApiResponseInterface
{
    private int $status;
    private string $statusText;
    private string $redirectUrl;

    public function __construct(array $response)
    {
        $this->status = 1;
        $this->statusText = 'Sold';
        $this->redirectUrl = $response['redirect_url'] ?? '';
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getStatusText(): string
    {
        return $this->statusText;
    }

    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

}
