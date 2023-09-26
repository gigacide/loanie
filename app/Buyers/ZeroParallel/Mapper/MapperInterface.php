<?php

namespace App\Buyers\Mapper;

interface MapperInterface
{
    /**
     * Map the response data to an array.
     *
     * @return array The response data as an array.
     */
    public function map(array $data): array;

}
