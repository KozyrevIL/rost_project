<?php

namespace App\Http\Controllers\Admin\PageBlock;

use App\Http\Controllers\Controller;
use App\Models\PageBlock;
use App\Models\Page;

class IndexController extends Controller
{
    public function __invoke(Page $page)
    {
        $pageBlocks = PageBlock::where('id_page',$page->id)->get();
        return view('pageBlock.index', compact('pageBlocks','page'));
    }

}
