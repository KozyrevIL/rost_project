<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Services\Admin\Page\Service;

class MainController extends Controller
{
    public $service;

    public function __construct(Service  $service)
    {
        $this->service = $service;
    }
}
