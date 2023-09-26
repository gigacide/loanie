<?php

// app/Exceptions/PostbackErrorResponse.php

namespace App\Exceptions;

use Exception;

class PostbackErrorResponse extends Exception
{
    public function __construct($message = "Postback error response", $code = 500, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
