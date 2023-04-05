<?php

namespace App\Http\Controllers\Admin\PageBlock;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageBlock;

class EditController extends Controller
{
    public function __invoke(Page $page,PageBlock $pageBlock)
    {
        return view('pageBlock.edit',compact('page','pageBlock'));
    }
}
