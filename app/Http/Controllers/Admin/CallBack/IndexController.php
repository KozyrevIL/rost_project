<?php

namespace App\Http\Controllers\Admin\CallBack;

use App\Http\Controllers\CallBack\MainController;
use App\Models\CallBack;

class IndexController extends MainController
{
    public function __invoke()
    {
        $CallBacks = $this->service->select();

        return view('callBack.index', compact('CallBacks'));
    }

}
