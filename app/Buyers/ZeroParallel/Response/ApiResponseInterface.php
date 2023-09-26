<?php

namespace App\Buyers\ZeroParallel\Response;

interface ApiResponseInterface
{
    public function __construct(array $response);
    public function getStatus(): int;
    public function getStatusText(): string;
    public function getRedirect(): string;
    public function getPrice(): float;
    public function getAffiliatePrice(): float;
    public function toJson(): string;
    public function getLeadId(): string; // Adjust the return type as needed

}
