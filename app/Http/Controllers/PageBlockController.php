<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageBlock;

class PageBlockController extends Controller
{
    public function __invoke(Page $page)
    {
        $pageBlocks = PageBlock::where('id_page',$page->id)->orderBy('pos')->orderBy('id', 'DESC')->paginate(18);

        return view('pagesSmall', compact('pageBlocks'));
    }
}
