<?php

namespace App\Http\Controllers\CallBack;

use App\Http\Controllers\Controller;
use App\Services\CallBack\Service;

class MainController extends Controller
{
    public $service;

    public function __construct(Service  $service)
    {
        $this->service = $service;
    }
}
