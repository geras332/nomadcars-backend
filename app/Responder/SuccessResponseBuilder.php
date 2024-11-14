<?php

namespace App\Responder;

use Illuminate\Http\JsonResponse;
use InvalidArgumentException;

class SuccessResponseBuilder
{
    protected mixed $data = null;
    protected array $headers = [];

    protected int $statusCode;

    public function __construct(mixed $data = null, int $statusCode = 200)
    {
        if (!$this->isValidStatusCode($statusCode)) {
            throw new InvalidArgumentException("Invalid HTTP status code $statusCode");
        }

        $this->data = $data;
        $this->statusCode = $statusCode;
    }

    public function respond(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'status' => $this->statusCode,
            'data' => $this->data,
        ], $this->statusCode, $this->headers);
    }

    public function with(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    private function isValidStatusCode(int $statusCode): bool
    {
        return $statusCode >= 200 && $statusCode < 300;
    }
}
