<?php

namespace App\Buyers\Response;

interface ApiResponseInterface
{
    public function __construct(array $response);
    public function getStatus(): int;
    public function getStatusText(): string;
}
