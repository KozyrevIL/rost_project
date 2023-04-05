<?php

namespace App\Http\Controllers\Admin\PageBlock;

use App\Http\Controllers\Controller;
use App\Services\Admin\PageBlock\Service;

class MainController extends Controller
{
    public $service;

    public function __construct(Service  $service)
    {
        $this->service = $service;
    }
}
