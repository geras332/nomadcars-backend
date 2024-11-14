<?php

namespace App\Responder\Contracts;

use App\Responder\ErrorResponseBuilder;
use App\Responder\SuccessResponseBuilder;

interface Responder
{
    public function success($data = null, int $statusCode = 200): SuccessResponseBuilder;

    public function error(string $message = '', int $statusCode = 400): ErrorResponseBuilder;
}
