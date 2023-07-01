<?php


use App\Services\RejectedResponse;

class RejectedWithPriceRejectResponse extends RejectedResponse
{
    public function getPriceRejectAmount(): string
    {
        return $this->data['PriceRejectAmount'];
    }
}
