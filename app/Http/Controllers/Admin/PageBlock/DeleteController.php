<?php

namespace App\Http\Controllers\Admin\PageBlock;

use App\Http\Requests\Admin\PageBlock\UpdateRequest;
use App\Models\Page;
use App\Models\PageBlock;

class DeleteController extends MainController
{
    public function __invoke(Page $page, PageBlock $pageBlock)
    {

        $this->service->delete($pageBlock);

        return redirect()->route('admin.pageBlock.index', compact('page'))->with('message', 'Запись удалена!');        
    }
}
