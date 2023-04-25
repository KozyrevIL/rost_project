<?php

namespace App\Http\Controllers;

use App\Models\PageBlock;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {
        $slider = PageBlock::mainSelect()->where('id_page',4)->get();
        $articles = PageBlock::where('id_page',1)->orderBy('pos')->orderBy('id', 'DESC')->limit(6)->get();
        $imagesTravma = PageBlock::where('id_page',13)->orderBy('pos')->limit(5)->get();
        $about = PageBlock::where('id',9)->first();
        $imagesLicence= PageBlock::where('id_page',10)->orderBy('pos')->limit(5)->get();
        return view('default', compact('slider','articles','imagesTravma','about','imagesLicence'));
    }
}
