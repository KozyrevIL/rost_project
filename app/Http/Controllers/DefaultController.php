<?php

namespace App\Http\Controllers;

use App\Models\PageBlock;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {
        $sliders = PageBlock::where('id_page',2)->get();
        $articles = PageBlock::where('id_page',2)->orderBy('pos')->limit(6)->get();
       
        return view('default', compact('sliders','articles'));
    }
}
