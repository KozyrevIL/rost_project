<?php

namespace App\Http\Controllers\Admin\PageBlock;

use App\Http\Controllers\Controller;
use App\Models\PageBlock;
use App\Models\Page;

class CreateController extends Controller
{
    public function __invoke(Page $page)
    {
        return view('pageBlock.create', compact('page'));
    }
}
