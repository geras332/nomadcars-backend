<?php

namespace App\Http\Controllers;

use App\Responder\Contracts\Responder as ResponderContract;
use App\Responder\Responder;

abstract class Controller
{
    protected Responder $responder;

    public function __construct(ResponderContract $responder)
    {
        $this->responder = $responder;
    }
}
