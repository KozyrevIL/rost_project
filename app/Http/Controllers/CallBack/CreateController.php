<?php

namespace App\Http\Controllers\CallBack;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CreateController extends MainController
{
    public function __invoke()
    {
        $param1 = rand(0,9);
        $param2 = rand(0,9);
        return view('callBack.create', compact('param1','param2'));    
    }
    
}
