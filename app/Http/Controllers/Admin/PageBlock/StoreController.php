<?php

namespace App\Http\Controllers\Admin\PageBlock;

use App\Http\Requests\Admin\PageBlock\StoreRequest;
use App\Models\Page;

class StoreController extends MainController
{
    public function __invoke(StoreRequest $request, Page $page)
    {
        $data= $request->validated();

        $image_path = $request->file('image')->store('image', 'public');
        
        $data += ['item'=>$image_path];

        $this->service->store($data);

        return redirect()->route('admin.pageBlock.index',compact('page'));
    }
}
