<?php

namespace App\Buyers\ZeroParallel\Mapper;

interface MapperInterface
{
    /**
     * Map the response data to an array.
     *
     * @return array The response data as an array.
     */
    public function map(array $data): array;

}
