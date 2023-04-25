<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageBlock;

class PageTextController extends Controller
{
    public function __invoke(Page $page)
    {
        $pageBlocks = PageBlock::where('id_page',$page->id)->orderBy('pos')->orderBy('id', 'DESC')->get();

        return view('pagesSmallForText', compact('pageBlocks'));
    }
}
