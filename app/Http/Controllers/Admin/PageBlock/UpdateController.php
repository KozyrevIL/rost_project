<?php

namespace App\Http\Controllers\Admin\PageBlock;

use App\Http\Requests\Admin\PageBlock\UpdateRequest;
use App\Models\Page;
use App\Models\PageBlock;

class UpdateController extends MainController
{
    public function __invoke(UpdateRequest $request, Page $page, PageBlock $pageBlock)
    {
        $data = $request->validated();

        if ($request->file('image') != null) {
            $image_path = $request->file('image')->store('image', 'public');
            $data += ['item' => $image_path];
        }

        $this->service->update($pageBlock, $data);

        return redirect()->route('admin.pageBlock.index', compact('page'));
    }
}
