<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;

class CreateController extends Controller
{
    public function __invoke(Page $page)
    {
        return view('page.create');
    }
}
