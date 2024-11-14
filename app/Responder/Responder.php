<?php

namespace App\Responder;

use App\Responder\Contracts\Responder as ResponderContract;

class Responder implements ResponderContract
{
    public function success($data = null, int $statusCode = 200): SuccessResponseBuilder
    {
        return new SuccessResponseBuilder($data, $statusCode);
    }

    public function error(string $message = '', int $statusCode = 400): ErrorResponseBuilder
    {
        return new ErrorResponseBuilder($message, $statusCode);
    }
}
