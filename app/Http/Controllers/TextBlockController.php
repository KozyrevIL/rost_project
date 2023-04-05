<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageBlock;

class TextBlockController extends Controller
{
    public function __invoke(PageBlock $pageBlock)
    {
        return view('pageBlock.index', compact('pageBlocks','page'));
    }
}
