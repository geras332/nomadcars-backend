<?php

namespace App\Responder;

use Illuminate\Http\JsonResponse;
use InvalidArgumentException;

class ErrorResponseBuilder
{
    protected array $errors = [];
    protected array $headers = [];

    protected string $message;
    protected int $errorCode = 0;
    protected int $statusCode;

    public function __construct(string $message = '', int $statusCode = 500)
    {
        if (!$this->isValidStatusCode($statusCode)) {
            throw new InvalidArgumentException("Invalid HTTP status code $statusCode");
        }

        $this->message = $message;
        $this->statusCode = $statusCode;
    }

    public function respond(): JsonResponse
    {
        return response()->json([
            'success' => false,
            'status' => $this->statusCode,
            'error' => [
                'code' => $this->errorCode,
                'message' => $this->message,
                'errors' => $this->errors,
            ],
        ], $this->statusCode, $this->headers);
    }

    public function with(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function errors(array $errors): self
    {
        $this->errors = $errors;

        return $this;
    }

    private function isValidStatusCode(int $statusCode): bool
    {
        return $statusCode >= 400 && $statusCode < 600;
    }
}
