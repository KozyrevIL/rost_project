<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ImageController extends Controller
{
    public function __invoke($fname)
    {
        $width = request()->w;
        $height = request()->h;

        $thumbnail = Image::make(Storage::path('/public/image/') . $fname);
        
        if (($width == null) && ($height == null)) return $thumbnail->response();

        $thumbnail->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        return $thumbnail->response();
    }
}
